<?php
	require __DIR__."/header.php";
	$contact=$db->getOne('contacts');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Контакты</title>
	<!--[if IE]><script src="../js/html5.js"></script><![endif]-->

	<!-- favicon -->
	<link href="../favicon.ico" rel="shortcut icon">

	<!-- Main style -->
	<link href="../css/widgets.css" rel="stylesheet" media="screen">
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/all.css" rel="stylesheet" media="screen">
	
	<!--[if lte IE 8]><link rel="stylesheet" href="../css/ie8.css" media="screen, projection"><![endif]-->

	<!-- Jquery library -->
	<script src="../js/jquery_1.12.4.js"></script>
	<!-- UI -->
	<script src="../js/jquery-ui-1.9.0.custom.min.js"></script>
	<!-- Widgets -->
	<script src="../js/widgets.js"></script>
	<script src="../js/bootstrap.js"></script>
	<!-- Yandex map -->
	<script src="http://api-maps.yandex.ru/2.0/?load=package.standard&mode=debug&lang=ru-RU" ></script>
	<!-- Main functions -->
	<script src="../js/functions.js"></script>
	<script src="../js/function_action_forms.js"></script>
</head>
<body>

<!-- wrapper -->
<div class="wrapper">
	<!-- header -->
	<header class="header" ">
		<div class="max-wrap">
			<div class="top-line">
				<div class="logo"><a href="index.php"><img src="../img/logo.png" alt=""/></a></div>
				<nav class="nav">
					<ul class="nav-list">
						<li><a href="index.php">о компании</a></li>
						<li><a href="catalog.php">Каталог</a></li>
						<li><a href="about2.php">наш кофе</a></li>
						<li><a href="horeca.php">Horeca</a></li>
						<li class="active"><a href="contacts.php">Контакты</a></li>
						<li>
							<a href="logout.php">
								<button class=" btn-info">
									<span class="glyphicon glyphicon-log-out"></span>
								</button>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	
	<!-- content -->
	<div class="content">
		<!-- max-wrap -->
		<div class="max-wrap">
			<div class="map" data-left="42.858271" data-right="74.587462" data-zoom="15"></div>
			<div class="contacts">for load contacts</div>
				<script>
					$('.contacts').load('contacts_page.php');
				</script>
		</div>
		<!-- max-wrap end -->
	</div>
	<!-- content end -->
</div>
<!-- wrapper end -->

<!-- footer -->
<footer class="footer">
	<div class="max-wrap">
		<div class="footer-contacts">
			<span><?php echo $contact['office']?></span>
			<span><a href="mailto:<?php echo $contact['e-mail']?>"><?php echo $contact['e-mail']?></a></span>
		</div>
		<div class="logo-footer"><a href=""><img src="../img/logo-footer.png" alt=""/></a></div>
		<div class="location-footer">
			<?php echo $contact['address_place']?>, <a href=""><?php echo $contact['address_street']?> </a>
			<div><?php echo $contact['detail_address'] .",". $contact['address_country'];?></div>
		</div>
	</div>
</footer>
<!-- footer end -->
<!-- Modal -->
<div id="modal_edit_contacts" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Window</h4>
			</div>
			<div class="modal-body">
				<form id="form_edit_contacts" action="javascript:void(0)" onSubmit="javascript:edit_contacts(this); return false;">
					<div class="form-group">
						<label for="legal_entity">Legal entity:</label>
						<input type="text" name="legal_entity" value="<?php echo $contact['legal_entity'];?>" class="form-control" id="legal_entity"/>
					</div>
					<div class="form-group">
						<label for="INN">INN/KPP:</label>
						<input type="text" name="INN" value="<?php echo $contact['INN'];?>" class="form-control" id="INN"/>
					</div>
					<div class="form-group">
						<label for="address">Location:</label>
						<input type="text" name="address_place" value="<?php echo $contact['address_place'];?>" class="form-control" id="address_place"/>
					</div>
					<div class="form-group">
						<label for="address">address_street:</label>
						<input type="text" name="address_street" value="<?php echo $contact['address_street'];?>" class="form-control" id="address_street"/>
					</div>
					<div class="form-group">
						<label for="address">detail_address:</label>
						<input type="text" name="detail_address" value="<?php echo $contact['detail_address'];?>" class="form-control" id="address_street"/>
					</div>
					<div class="form-group">
						<label for="address_country">country:</label>
						<input type="text" name="address_country" value="<?php echo $contact['address_country'];?>" class="form-control" id="address_country"/>
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" name="e-mail" value="<?php echo $contact['e-mail'];?>" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="text">office:</label>
						<input type="text" name="office" value="<?php echo $contact['office'];?>" class="form-control" id="text">
					</div>
					<div class="form-group">
						<label for="text">skype:</label>
						<input type="text" name="skype" value="<?php echo $contact['skype'];?>" class="form-control" id="text">
					</div>
					<div class="form-group">
						<label for="text">facebook:</label>
						<input type="text" name="facebook" value="<?php echo $contact['facebook'];?>" class="form-control" id="text">
						<input type="hidden" name="target" value="form_edit_contact" class="form-control" >
					</div>
					<button type="submit" class="btn btn-default">Edit</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
</body>
</html>