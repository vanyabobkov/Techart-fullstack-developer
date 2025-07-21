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
                        <h1 class="banner-news__title">asd</h1>
                        <p class="banner-news__text">asd</p>
                    </div>
                </div>
            </div>
            <section class="news-thumbnails">
                <div class="news-thumbnails__content">
                    <h1>Новости</h1>
                    <ul class="news-thumbnails__list">
                        <?php foreach ($items as $item) { ?>
                        <li class="news-thumbnails__item">
                            <div class="news-thumbnails__container">
                                <div class="news-thumbnails__date"><?= date_format(date_create($item["date"]), "d.m.Y") ?></div>
                                <h2 class="news-thumbnails__title"><?= $item["title"] ?></h2>
                                <div class="news-thumbnails__announce"><?= $item["announce"] ?></div>
                                <p class="news-thumbnails__image visually-hidden"><?= $item["image"] ?></p>
                            </div>
                            <a href="index.php?search=<?= $item["id"] ?>" class="news-thumbnails__link">
                                <div class="news-thumbnails__link--block">
                                    <p class="news-thumbnails__link--text">Подробнее</p>
                                    <div class="news-thumbnails__link--arrow"></div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="pagination">
                    <ul class="pagination__list">
                        <?php for ($i = 1; $i <= $countPages; $i++) { ?>
                        <li class="pagination__item"><a class=pagination__link href=index.php?page=<?= $i ?>><?= $i ?></a></li>
                        <?php }; ?>
                        <li class="pagination__item <?= ($currentPage == $countPages) ? "visually-hidden" : ""; ?>"><a class=pagination__link href=index.php?page=<?= $nextPage ?>></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <footer class="page-footer">
        <div class="page-footer__content">© 2023 — 2412 «Галактический вестник»</div>
    </footer>
    <script src="js/main.js" type="module"></script>
</body>
</html>