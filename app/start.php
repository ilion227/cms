<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/cms/');

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=cms', 'root', '');
    echo "Connected!" ."<br>";
} catch (Exception $ex) {
    echo "Connection to database failed!";
    echo $ex . "<br>";
}