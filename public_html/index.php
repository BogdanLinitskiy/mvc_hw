<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'application/bootstrap.php';

//http:roothat:1017
//Model - логика
//View - отображение/представление
//Controller - работа с пользователем




/*
 * 2 типа путей
 * абсолютный и относительный
 * относительный application/bootstrap.php
 * абсолютный - начинается с /
 * DocumentRoot /var/www/mysite.dev/public_html - корень проекта, с него начинается абсолютная ссылка(путь)
 * */
?>