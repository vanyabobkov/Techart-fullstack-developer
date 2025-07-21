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
                <div class="breadcrumbs">
                    <div class="breadcrumbs__wrapper">
                        <a href="index.php" class"breadcrumbs__item">Главная / </a>
                        <a href="#" class"breadcrumbs__item breadcrumbs__item--current"><?= $title ?></a>
                    </div>
                </div>
            <div>
            <h1 class="news__title"><?= $title ?></h1>
        </div>
        <div class="news__container">
            <div class="news__item">
                <div class="news__date"><?= $date ?></div>
                <h2 class="news__announce"><?= $announce ?></h2>
                <div class="news__text"><?= $content ?></div>
                <a href="index.php" class="news__link">
                    <div class="news__link--block">
                        <p class="news__link--text">Назад к новостям</p>
                        <div class="news__link--arrow-back"></div>
                    </div>
                </a>
            </div>
            <div class="news__image">
                <img src="../../task/images/<?= $image ?>" alt="Картинка статьи">
            </div>
        </div>
    </main>
        <footer class="page-footer">
            <div class="page-footer__content">© 2023 — 2412 «Галактический вестник»</div>
        </footer>
        <script src="js/main.js" type="module"></script>
</body>
</html>