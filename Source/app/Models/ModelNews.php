<?php

namespace app\Models;

class ModelNews
{
    // всего новостей
    public static function getCount()
    {
        $sql = mysqli_query(\app\DB::connect(), "SELECT COUNT(*) FROM `news`");
        $row = mysqli_fetch_row($sql);
        $totalNews = $row[0];
        return $totalNews;
    }

    // какие записи выводить
    public static function getRows($offset, $limit)
    {
        $items = mysqli_query(\app\DB::connect(), "SELECT * FROM `news` ORDER BY date DESC LIMIT $offset,$limit");
        return $items;
    }

    // определение id выбранной страницы 
    public static function getItem($id)
    {
        $sql = mysqli_query(\app\DB::connect(), "SELECT `id`, `date`, `title`, `announce`, `image`, `content` FROM `news` WHERE `id` = $id");
        $items = mysqli_fetch_array($sql);
        return $items;
    }
}

