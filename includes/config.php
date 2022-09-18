<?php
define ('SITE_NAME', "Cut your URL");
define ('HOST', "http://" . $_SERVER['HTTP_HOST']);

const DB_HOST = 'localhost'; //localhost
define ('DB_NAME', 'cut_url');
define ('DB_USER', 'root');
define ('DB_PASS', '');

define ('URL_CHARS', "abcdefghijklmnopqrstuvwxyz0123456789-");
session_start();
