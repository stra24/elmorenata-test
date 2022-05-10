import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。

const styleListMenuElement = document.querySelectorAll(
  '.style-list__menu-element'
);

styleListMenuElement.forEach((element) => {
  element.addEventListener('click', () => {
    styleListMenuElement.forEach((ele) => {
      if (ele.classList.contains('--selected') && ele != element) {
        // 全部の背景を外す。
        ele.classList.remove('--selected');
      }
    });
    // 押下した画像にだけ背景を適用する。
    element.classList.add('--selected');
  });
});
