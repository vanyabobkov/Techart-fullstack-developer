<?php

namespace app\Controllers;

class ControllerNews
{
    // основная страница
    public static function pageIndex($pageId)
    {
        // данные для списка новостей
        $limit = 4;
        $page = filter_var($pageId, FILTER_SANITIZE_NUMBER_INT) ?? 1;
        $offset = ($page * $limit) - $limit;
        $items = \app\Models\ModelNews::getRows($offset, $limit);
        // данные для пагинации
        $currentPage = $_GET['page'] ?? $currentPage = 1;
        $countPages = ceil(\app\Models\ModelNews::getCount() / $limit);
        $nextPage = $currentPage + 1;
        require dirname(dirname(__DIR__)) .'/Templates/template_index.php';
    }

    // страница с открытой новостью
    public static function pageDetail($newsId)
    {
        $data = \app\Models\ModelNews::getItem(filter_var($newsId, FILTER_SANITIZE_NUMBER_INT));
        $date = date_format(date_create($data["date"]), "d.m.Y");
        $title = $data["title"];
        $announce = $data["announce"];
        $image = $data["image"];
        $id = $data["id"];
        $content = $data["content"];
        require dirname(dirname(__DIR__)) .'/Templates/template_detail.php';
    }
}