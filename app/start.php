<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/cms/');

$db = new PDO('mysql:host=localhost:dbname=cms', 'root', '');