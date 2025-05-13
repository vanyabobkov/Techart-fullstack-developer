<?php
  require_once 'include/paginator.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Галактический вестник</title>
</head>
<body class="page__body">
  <header class="page-header">
    <div class="page-header__logo">
      <a class="page-header__link" href="index.php">
        <img src="img/logo.svg" width="93" height="66" alt="Логотип">
        <p class="logo-text">Галактический<br>вестник</p>
      </a>
    </div>
  </header>
  <main class="page-main">
    <div class="news">
      <div class="banner-news">
        <div class="banner-news__wrapper">
          <div class="banner-news__content">
            <h1 class="banner-news__title">Возвращение этнографа</h1>
            <p class="banner-news__text">Сегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
          </div>
        </div>
      </div>
      <section class="news-thumbnails">
        <div class="news-thumbnails__content">
          <h1>Новости</h1>
          <!-- Здесь будут выводиться новости из БД -->
          <ul class="news-thumbnails__list">
            <?php
              // Текущий URL и 4 шт. на странице
              $peger = new DBPaginator('index.php', 4);
              $items = $peger->getItems("SELECT * FROM `news` ORDER BY date DESC");

              /* Инфо о текущей странице */
              $peger->page;
              $peger->amt;
              ?>
                <?php foreach ($items as $item){
                  echo '<li class="news-thumbnails__item">
                    <div class="news-thumbnails__content">
                      <div class="news-thumbnails__date">'.$item["date"].'</div>
                      <h2 class="news-thumbnails__title">'.$item["title"].'</h2>
                      <div class="news-thumbnails__announce">'.$item["announce"].'</div>
                      <p class="visually-hidden">'.$item["image"].'</p>
                    </div>
                    <a href="news-page.php?search='.$item["id"].'" class="news-thumbnails__link">
                      <div class="news-thumbnails__link--block">
                        <p class="news-thumbnails__link--text">Подробнее</p>
                        <div class="news-thumbnails__link--arrow"></div>
                      </div>
                    </a>
                  </li>';
                } ?>
          </ul>
        </div>
        <div class="pagination">
          <?php echo $peger->display; ?>
        </div>
      </section>
    </div>
  </main>
  <footer class="page-footer">
    <div class="page-footer__content">© 2023 — 2412 «Галактический вестник»</div>
  </footer>
  <script src="js/main.js"></script>
</body>
</html>
