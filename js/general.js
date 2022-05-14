export const header = document.querySelector('.general-header');
const mobileBtn = document.querySelector('.general-header__mobile-btn');
const heroImage = document.querySelector('.top-hero-image');

// TOPページ以外のページでは、ヘッダーを常に表示するようにする。
if (heroImage == null) {
  header.classList.add('--show');
}
// スクロール禁止関数
function notscroll(e) {
  e.preventDefault();
}

// ハンバーガーボタンを押したときに、ヘッダーが開かれるのと、スクロールを禁止する設定。
mobileBtn.addEventListener('click', () => {
  if (header.classList.contains('--opened')) {
    // ヘッダーを閉じる場合は、スクロール禁止を解除する。
    // PC用
    document.removeEventListener('wheel', notscroll, { passive: false });
    // スマホ用
    document.removeEventListener('touchmove', notscroll, { passive: false });
  } else {
    // ヘッダーを開く場合は、スクロールを禁止する。
    // PC用
    document.addEventListener('wheel', notscroll, { passive: false });
    // スマホ用
    document.addEventListener('touchmove', notscroll, { passive: false });
  }
  header.classList.toggle('--opened');
});

window.addEventListener('resize', () => {
  if (window.innerWidth > 1016 && header.classList.contains('--opened')) {
    // ヘッダーを閉じる場合は、スクロール禁止を解除する。
    // PC用
    document.removeEventListener('wheel', notscroll, { passive: false });
    // スマホ用
    document.removeEventListener('touchmove', notscroll, { passive: false });
    header.classList.remove('--opened');
  }
});

// 指定された行数以上の場合は、「･･･」と表示して切った文字列として返す関数
export function adjustNumberOfLines(maxLineNum, element) {
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
