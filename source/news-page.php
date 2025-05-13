<?php
  require_once 'include/database.php';
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
      <div class="news-wrapper">

        <?php
          require_once 'include/paginator.php';
          $id = htmlspecialchars($_GET['search']);

          $current_news = new DBPaginator('news-page.php', 1);
          $items = $current_news->getItems("SELECT * FROM `news` WHERE id = $id");
          foreach ($items as $item){

          echo '<div class="breadcrumbs">
            <div class="breadcrumbs__wrapper">
              <a href="index.php" class"breadcrumbs__item">Главная / </a>
              <a href="#" class"breadcrumbs__item breadcrumbs__item--current">' .$item["title"]. '</a>
            </div>
          </div>
            <div>
              <h1 class="news__title">'.$item["title"].'</h1>
            </div>
            <div class="news__container">
              <div class="news__item">
                <div class="news__date">'.$item["date"].'</div>
                <h2 class="news__announce">'.$item["announce"].'</h2>
                <div class="news__text">'.$item["content"].'</div>
                <a href="index.php" class="news__link">
                  <div class="news__link--block">
                    <p class="news__link--text">Назад к новостям</p>
                    <div class="news__link--arrow-back"></div>
                  </div>
                </a>
              </div>
              <div class="news__image">
                <img src="../../task/images/'.$item["image"].'") alt="Картинка статьи">
              </div>
              </div>';
            }
        ?>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="page-footer__content">© 2023 — 2412 «Галактический вестник»</div>
  </footer>
</body>
</html>

