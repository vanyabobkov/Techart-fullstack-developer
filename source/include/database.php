<?php
  $host="MySQL-8.0";
  $user="root";
  $pass=""; //Установленный вами пароль
  $db_name="news";
  $link = mysqli_connect($host,$user,$pass,$db_name);

  if(mysqli_connect_errno())
  {
      echo 'Ошибка подключения к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
      exit();
  }
