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
  const requiredNewLineNum = Math.floor(
    (maxHeight - element.clientHeight) / 22
  );
  console.log('requiredNewLineNum: ' + requiredNewLineNum);
  for (let i = 0; i < requiredNewLineNum; i++) {
    if (i == 0) {
      element.insertAdjacentHTML('beforeend', '<br />');
    }
    element.insertAdjacentHTML('beforeend', '<br />');
  }
});
