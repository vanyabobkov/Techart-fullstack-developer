//Изменение формата даты
const news = document.querySelectorAll('.news-thumbnails__item');
const changeDateFormat = () => {
  news.forEach(function (element) {
    const newsDateElement = element.querySelector('.news-thumbnails__date');
    const oldDate = newsDateElement.textContent;
    const date = oldDate.split(' ');
    const onlyDate = date[0];
    const array = onlyDate.split('-');
    const result = array[2] + '.' + array[1] + '.' + array[0];
    newsDateElement.textContent = result;
  });
};

export {changeDateFormat};
