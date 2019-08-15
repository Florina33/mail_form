<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль
$database = 'mailform'; // имя базы данных, которую вы должны создать
$db_form = new mysqli($host, $user, $pswd, $database);  // создаем экземпляр класса с параметрами подключения к БД.

$con = mysqli_connect($host, $user, $pswd, $database) or die("Connection Failed");
// echo "Connection Success";
