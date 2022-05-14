import './general.js'; // インポートなしにgeneral.js内のコードを一度だけ実行する。
import { adjustNumberOfLines } from './general.js';

const archiveElementList = document.querySelectorAll('.archive__element');
const archiveHeadlineList = document.querySelectorAll('.archive__headline');

archiveElementList.forEach((element) => {
  element.addEventListener('mouseover', () => {
    // 画像をズームする。
    element.classList.add('--zoom');
  });

  element.addEventListener('mouseleave', () => {
    // 画像のズームを解除する。
    element.classList.remove('--zoom');
  });
});

archiveHeadlineList.forEach((element) => {
  element.textContent = adjustNumberOfLines(2, element);
});

window.addEventListener('resize', () => {
  archiveHeadlineList.forEach((element) => {
    element.textContent = adjustNumberOfLines(2, element);
  });
});

let maxHeight = 0;
archiveHeadlineList.forEach((element) => {
  if (maxHeight < element.clientHeight) {
    maxHeight = element.clientHeight;
  }
});
archiveHeadlineList.forEach((element) => {
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
