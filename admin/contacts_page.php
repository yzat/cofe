<?php
	require __DIR__."/header.php";
	$contact=$db->getOne('contacts');
	$address_place=htmlspecialchars_decode($contact['address_place']);
	$address_street=htmlspecialchars_decode($contact['address_street']);
	$address_country=htmlspecialchars_decode($contact['address_country']);
	$e_mail=$contact['e-mail'];
	$skype=$contact['skype'];
	$facebook=$contact['facebook'];
?>
	<h1>Контакты</h1>
<!-- Trigger the modal with a button -->
	<a data-toggle="modal" data-target="#modal_edit_contacts">
		<span class="glyphicon glyphicon-pencil contacts-edit" style="font-size:25px"></span></p>
	</a>
	<strong>Компания "Professional Coffee Service"</strong>
	<div class="location">
		<p style="font-size:12px;">
			<nobr>Юр. лицо:<?php echo $contact['legal_entity'];?></nobr><br>
			<nobr>ИНН/КПП:<?php echo $contact['INN'];?></nobr>
		</p>
		<p><?php echo $address_place;?> <br/> <?php echo $address_street;?><br/> <?php echo $address_country;?></p>
	</div>
	<ul class="contacts-list">
		<li><span>Офис:</span><?php echo $contact['office'];?></li>
		<li><span>Email:</span><a href="mailto:<?php echo $e_mail;?>"><?php echo $e_mail;?></a></li>
		<li><span>Skype:</span><a href="skype:<?php echo $skype;?>"><?php echo $skype;?></a></li>
		<li><span>Facebook:</span><a href="<?php echo $facebook;?>"><?php echo $facebook;?></a></li>
	</ul>
