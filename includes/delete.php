<?php
ob_start();
include_once "config.php";
include_once "functions.php";
if (!isset($_GET['id']) || empty($_GET['id'])) {
  header('Location: /profile.php');
}
//сделать дополнительную проверку принадлежит ли ссылка пользователю
delete_link($_GET['id']);
    $_SESSION['success'] = "Ссылка удалена.";
    header('Location: /profile.php');
    die;
ob_end_flush();