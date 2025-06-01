//Превью выбранной статьи на банере
const news = document.querySelectorAll('.news-thumbnails__item');
const firstNews = news[0];
const bannerNews = document.querySelector('.banner-news');
firstNews.classList.add('news-thumbnails__item--current');


const imageOnBanner = firstNews.querySelector('.visually-hidden').textContent;
bannerNews.style.backgroundImage = 'url(../../task/images/' + imageOnBanner + ')';

const bannerNewsTitle = document.querySelector('.banner-news__title');
bannerNewsTitle.textContent = firstNews.querySelector('.news-thumbnails__title').textContent;

const bannerNewsText = document.querySelector('.banner-news__text');
bannerNewsText.textContent = firstNews.querySelector('.news-thumbnails__announce').textContent;

const Fn = (selectCurrentNews) => {
  selectCurrentNews.addEventListener('click', function (evt) {
    // evt.preventDefault();
    const cancelCurrentNews = document.querySelector('.news-thumbnails__item--current');
    cancelCurrentNews.classList.remove('news-thumbnails__item--current');
    selectCurrentNews.classList.add('news-thumbnails__item--current');

    imageToBanner = selectCurrentNews.querySelector('.visually-hidden').textContent;
    bannerNewsTitle.textContent = selectCurrentNews.querySelector('.news-thumbnails__title').textContent;
    bannerNewsText.textContent = selectCurrentNews.querySelector('.news-thumbnails__announce').textContent;
    bannerNews.style.backgroundImage = 'url(../../task/images/' + imageToBanner + ')';
  });
}

for (let i = 0; i < news.length; i++) {
  Fn(
    news[i],
  );
}

//Выделение элемента пагинации текущей страницы
const pageButtonsNode = document.querySelectorAll('.pagination__item');
const pageButtons = [...pageButtonsNode];
pageButtons[0].classList.add('pagination__item--current');
const currentButton = document.querySelector('.pagination__item--current');
let params = new URLSearchParams(document.location.search);
let value = params.get('page');
pageButtons.forEach(function (pageButton) {
  const buttonValue = pageButton.querySelector('p').textContent;
  if (value == buttonValue) {
    currentButton.classList.remove('pagination__item--current');
    pageButton.classList.add('pagination__item--current');
  }
});
