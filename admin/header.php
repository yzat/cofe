<?php
session_start();
	if(empty($_SESSION['status'])){
		header('Location: http://127.0.0.1/cofe/index.php');
//		echo "<script>window.location='../index.php'</script>";
	}
error_reporting(0);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Bishkek');

require __DIR__."/../autoload.php";
$db = new MysqliDb ('localhost', 'root', '123', 'cofe');
?>