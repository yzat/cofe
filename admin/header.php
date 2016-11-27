<?php
session_start();
    require __DIR__."/autoload.php";

if(empty($_SESSION['status'])){
    echo "<script>window.location='../index.php'</script>";
}
$ya=$_SESSION['status'];
if($ya!='i_user_in_this_website'){
    echo "<script>window.location='../index.php'</script>";
}
$user_id=@$_SESSION['user_id'];

error_reporting(0);
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Bishkek');
$db = new MysqliDb ('localhost', 'root', '', 'coffee');

$db->where('id',$user_id);
$data=$db->getOne('admin');
$user_id=$data['id'];
echo ""
?>