//Выделение элемента пагинации текущей страницы
const showCurrentPageElement = () => {
const pageButtonsNode = document.querySelectorAll('.pagination__item');
const pageButtons = [...pageButtonsNode];
pageButtons[0].classList.add('pagination__item--current');
const currentButton = document.querySelector('.pagination__item--current');
let params = new URLSearchParams(document.location.search);
let value = params.get('page');
pageButtons.forEach(function (pageButton) {
  const buttonValue = pageButton.querySelector('a').textContent;
  if (value == buttonValue) {
    currentButton.classList.remove('pagination__item--current');
    pageButton.classList.add('pagination__item--current');
  }
});
};

export {showCurrentPageElement};
