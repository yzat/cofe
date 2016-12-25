<?php
require  __DIR__ ."/header.php";
$target_P=@$_POST['target'];
$target_G=@$_GET['target'];
//echo "<pre>"; print_r($_FILES); "</pre>";
//echo "<pre>"; print_r($_POST); "</pre>";die;
//echo "<pre>"; print_r($_GET); "</pre>";die;

//	for edit contacts in contacts.php
if($target_P=='form_edit_contact'){
	$address_place=$_POST['address_place'];
	$address_street=$_POST['address_street'];
	$address_country=$_POST['address_country'];
	$office=$_POST['office'];
	$e_mail=$_POST['e-mail'];
	$skype=$_POST['skype'];
	$facebook=$_POST['facebook'];
	$data=array(
		'address_place'=>"$address_place",
		'address_street'=>"$address_street",
		'address_country'=>"$address_country",
		'office'=>"$office",
		'e-mail'=>"$e_mail",
		'facebook'=>"$facebook",
		'skype'=>"$skype"
	);
	$db->where('id',1);
	if($db->update('contacts',$data)){
		echo $db->count . ' records were updated';
		echo $db->getLastQuery();
	}else{
		echo 'update failed: ' . $db->getLastError();
	}
}
?>