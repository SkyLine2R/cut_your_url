<?php
session_start();
session_destroy();
header('Location: /'); //функции здесь недоступны. Доделать чтобы были доступны и правильный адрес//
