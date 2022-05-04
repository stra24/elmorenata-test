export const header = document.querySelector('.general-header');
const mobileBtn = document.querySelector('.general-header__mobile-btn');

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
