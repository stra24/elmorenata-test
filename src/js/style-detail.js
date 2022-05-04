import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。

const styleDetailListElement = document.querySelectorAll(
  '.style-detail__list-element'
);

const styleDetailImage = document.querySelector('.style-detail__image');

styleDetailListElement.forEach((element) => {
  element.addEventListener('click', () => {
    const imgSrc = element.firstElementChild.getAttribute('src');
    styleDetailListElement.forEach((ele) => {
      // 全部の黒背景を外す。
      ele.classList.remove('--selected');
    });
    // 押下した画像にだけ黒背景を適用する。
    element.classList.add('--selected');
    styleDetailImage.firstElementChild.setAttribute('src', imgSrc);
  });
});
