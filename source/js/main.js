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
