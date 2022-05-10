import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。

const stylistSubImageElementList = document.querySelectorAll(
  '.stylist__sub-image-element'
);

const stylistMainImage = document.querySelector('.stylist__main-image');

stylistSubImageElementList.forEach((element) => {
  element.addEventListener('click', () => {
    const imgSrc = element.firstElementChild.getAttribute('src');
    stylistSubImageElementList.forEach((ele) => {
      // 全部の黒背景を外す。
      ele.classList.remove('--selected');
    });
    // 押下した画像にだけ黒背景を適用する。
    element.classList.add('--selected');
    stylistMainImage.firstElementChild.setAttribute('src', imgSrc);
  });
});
