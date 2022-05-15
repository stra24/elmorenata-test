import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。

const serviceDetail = document.querySelector('#booking-package_serviceDetails');

// オブザーバインスタンスを作成
const observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    // 何かしたいこと
    // console.log(mutation.target.childNodes);

    if (mutation.target.childNodes.length == 2) {
      const element = mutation.target.childNodes[1];
      if (element.classList.contains('goToCalendarButton')) {
        console.log('クリックします');
        element.click();
      }
    }
    // console.log(mutation.target);
  });
});

// オブザーバの設定
const config = {
  characterData: true,
  subtree: true,
  childList: true,
};

console.log(serviceDetail);
// 対象ノードとオブザーバの設定を渡す
observer.observe(serviceDetail, config);

const bookingContainer = document.querySelector('.booking-container');

// オブザーバインスタンスを作成
const forBackReservationObserver = new MutationObserver((mutations) => {
  const backBtn = document.querySelector('button.returnButton.bookingButton');
  console.log('aa');
  console.log(backBtn);
  if (backBtn) {
    backBtn.removeEventListener();
    backBtn.addEventListener('click', () => {
      console.log('戻るボタンを押下');
    });
  }
});

forBackReservationObserver.observe(bookingContainer, config);
