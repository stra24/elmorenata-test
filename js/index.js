import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。
import { header } from './general.js'; // 名前付きエクスポートをインポートする。
const topConcept = document.querySelector('.top-concept');
const topReservation = document.querySelector('.top-reservation');
const topStyle = document.querySelector('.top-style');
const topContents = document.querySelector('.top-contents');
const topBlog = document.querySelector('.top-blog');
const topContentsElementList = document.querySelectorAll(
  '.top-contents__element'
);
const topBlogElementList = document.querySelectorAll('.top-blog__element');
const topBlogHeadlineElementList = document.querySelectorAll(
  '.top-blog__headline'
);

window.addEventListener('scroll', () => {
  // ヘッダーの表示・非表示を制御する。
  const rect = Number(topConcept.getBoundingClientRect().top); // ブラウザ表示領域上部から要素上部までの距離

  // PC幅の場合
  if (window.innerWidth > 767) {
    // コンセプトエリアより下で、かつヘッダーが非表示設定になっている場合は、表示する。
    if (rect <= 0 && !header.classList.contains('--show')) {
      header.classList.toggle('--show');
    }

    // コンセプトエリアより上で、かつヘッダーが表示設定になっている場合は非表示にする。
    if (rect > 0 && header.classList.contains('--show')) {
      header.classList.toggle('--show');
    }
  }
});

// オプション
const options = {
  root: null,
  rootMargin: '0px',
  threshold: [0.3, 1.0],
};

function callback(entries, object) {
  entries.forEach((entry) => {
    const target = entry.target;

    if (
      entry.intersectionRatio >= 0.3 &&
      !target.firstElementChild.classList.contains('--show-block')
    ) {
      // 見えている領域が30%以上になったとき
      target.firstElementChild.classList.add('--show-block');
    }
    // else if (!entry.isIntersecting) {
    //   // 100%見えなくなったとき
    //   target.firstElementChild.classList.remove('--show-block');
    // }
  });
}

const observer = new IntersectionObserver(callback, options);
observer.observe(topConcept);
observer.observe(topReservation);
observer.observe(topStyle);
observer.observe(topContents);
observer.observe(topBlog);

topContentsElementList.forEach((element) => {
  element.addEventListener('mouseover', () => {
    // 画像をズームする。
    element.classList.add('--zoom');
  });

  element.addEventListener('mouseleave', () => {
    // 画像のズームを解除する。
    element.classList.remove('--zoom');
  });
});

topBlogElementList.forEach((element) => {
  element.addEventListener('mouseover', () => {
    // 画像をズームする。
    element.classList.add('--zoom');
  });

  element.addEventListener('mouseleave', () => {
    // 画像のズームを解除する。
    element.classList.remove('--zoom');
  });
});

topBlogHeadlineElementList.forEach((element) => {
  element.textContent = adjustNumberOfLines(2, element);
});

window.addEventListener('resize', () => {
  topBlogHeadlineElementList.forEach((element) => {
    element.textContent = adjustNumberOfLines(2, element);
  });
});

let maxHeight = 0;
topBlogHeadlineElementList.forEach((element) => {
  if (maxHeight < element.clientHeight) {
    maxHeight = element.clientHeight;
  }
});
topBlogHeadlineElementList.forEach((element) => {
  const requiredNewLineNum = Math.floor((maxHeight - element.clientHeight) / 22);
  console.log('requiredNewLineNum: ' + requiredNewLineNum);
  for (let i = 0; i < requiredNewLineNum; i++) {
    if (i == 0) {
      element.insertAdjacentHTML('beforeend', '<br />');
    }
    element.insertAdjacentHTML('beforeend', '<br />');
  }
});

// 指定された行数以上の場合は、「･･･」と表示して切った文字列として返す関数
function adjustNumberOfLines(maxLineNum, element)  {
  // 元の文字の内容と高さを退避しておく。{
  const completeText = element.textContent.trim();
  const completeElementHeight = element.clientHeight;

  // 最大行分の高さを取得しておく。
  element.textContent = 'あ';
  // ＋1する理由は、clientHeightは小数点以下があっても切り捨てた値が取得されるため。1行分の高さが22、2行分の高さが45というのが起こりうる。
  const maxLineHeight = element.clientHeight * maxLineNum + 1;

  if (completeElementHeight <= maxLineHeight) {
    return completeText;
  }

  // 一旦空にする。
  element.textContent = '';

  for (let i = 0; i < completeText.length; i++) {

    // 1文字追加する前の文字列
    const beforeAddText = element.textContent;

    let s = completeText.substring(i, i + 1);

    // 1文字と「･･･」を追加した文字列の現在の高さを取得する。
    element.textContent = beforeAddText + s + '･･･';
    const currentWithOmissionMarkHeight = element.clientHeight;

    // 最大行を超えた行数になっていたら
    if (currentWithOmissionMarkHeight > maxLineHeight) {
      return beforeAddText + '･･･';
    }

    element.textContent = beforeAddText + s;
  }
  return completeText;
}