<?php
session_start();

error_reporting(0);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Bishkek');

require __DIR__."/autoload.php";
$db = new MysqliDb ('localhost', 'root', '123', 'cofe');
?>