<?php
require  __DIR__ ."/header.php";
$target_P=@$_POST['target'];
$target_G=@$_GET['target'];
//echo "<pre>"; print_r($_FILES); "</pre>";
//echo "<pre>"; print_r($_POST); "</pre>";die;
//echo "<pre>"; print_r($_GET); "</pre>";die;
$back=array();
//	for edit contacts in contacts.php
if($target_P=='form_edit_contact'){
	$legal_entity=$_POST['legal_entity'];
	$legal_entity1=nl2br(htmlspecialchars(trim($legal_entity)));
	$INN=$_POST['INN'];
	$INN1=nl2br(htmlspecialchars(trim($INN)));
	$address_place=$_POST['address_place'];
	$address_place1=nl2br(htmlspecialchars(trim($address_place)));
	$address_street=$_POST['address_street'];
	$address_street1=nl2br(htmlspecialchars(trim($address_street)));
	$address_country=$_POST['address_country'];
	$address_country1=nl2br(htmlspecialchars(trim($address_country)));
	$office=$_POST['office'];
	$e_mail=$_POST['e-mail'];
	$skype=$_POST['skype'];
	$facebook=$_POST['facebook'];
	$data=array(
		'legal_entity'=>"$legal_entity1",
		'INN'=>"$INN1",
		'address_place'=>"$address_place1",
		'address_street'=>"$address_street1",
		'address_country'=>"$address_country1",
		'office'=>"$office",
		'e-mail'=>"$e_mail",
		'facebook'=>"$facebook",
		'skype'=>"$skype"
	);
	$db->where('id',1);
	if($db->update('contacts',$data)){
		$back['error']=0;
		$back['legal_entity']=$legal_entity;
		$back['INN']=$INN;
		$back['address_place']=$address_place;
		$back['address_street']=$address_street;
		$back['address_country']=$address_country;
		$back['office']=$office;
		$back['e_mail']=$e_mail;
		$back['skype']=$skype;
		$back['facebook']=$facebook;
	}else{
		$back['error']=1;
		$back['failed']='update failed: ' . $db->getLastError();
	}
}
	echo json_encode($back);
?>