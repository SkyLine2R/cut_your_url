<?php
ob_start();
include_once "config.php";
include_once "functions.php";
if (isset($_POST['link']) && !empty($_POST['link']) && isset($_POST['user_id']) && !empty($_POST['user_id'])) {
  if (add_link($_POST['user_id'], $_POST['link'])) {
    $_SESSION{'success'} = 'Ссылка успешно добавлена';
  } else {
    $_SESSION{'error'} ='Ссылка неуспешно недобавлена';
  }
}

    header('Location: /profile.php');
    die;
ob_end_flush();