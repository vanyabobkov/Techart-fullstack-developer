<?php
require_once 'include/database.php';

if (isset($_GET['page']))
{
    $currentPage = $_GET['page'];
} else
{
    $currentPage = 1;
};

$countNewsInPage = 4;
$firstInPage = ($currentPage * $countNewsInPage) - $countNewsInPage; // с какой записи выводить

$sql = mysqli_query($link, "SELECT COUNT(*) FROM `news`");
$row = mysqli_fetch_row($sql);
$totalNews = $row[0]; // всего новостей

// Количество страниц пагинации
$countPages = ceil($totalNews / $countNewsInPage);

$nextPage = $currentPage + 1;
