<?php

require '../app/start.php';

if (!isset($_GET['id'])) {
    header('Location: ' . BASE_URL . '/admin/list.php');
    die();
}

require VIEW_ROOT . '/admin/edit.php';