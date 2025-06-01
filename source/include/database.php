<?php
$link = mysqli_connect("MySQL-8.0","root","","news");
$result = mysqli_query($link, "SELECT * FROM `news`");

if(mysqli_connect_errno())
{
    echo 'Ошибка подключения к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}
