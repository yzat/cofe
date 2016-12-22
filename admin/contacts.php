<?php
	require __DIR__."/../header.php";
	$contact=$db->getOne('contacts');
	print_r($contact);
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
			
			<div class="contacts">
				<h1>Контакты</h1>
<!-- Trigger the modal with a button -->
				<a data-toggle="modal" data-target="#modal_edit_contacts">
					<span class="glyphicon glyphicon-pencil contacts-edit" style="font-size:25px"></span></p>
				</a>
				<strong>Компания "Professional Coffee Service"</strong>
				<div class="location"><?php echo $contact['address_place'];?> <br/> <?php echo $contact['address_street'];?><br/> <?php echo $contact['address_country'];?></div>
				<ul class="contacts-list">
					<li><span>Офис:</span><?php echo $contact['office'];?></li>
					<li><span>Email:</span><a href="mailto:<?php echo $contact['e-mail'];?>"><?php echo $contact['e-mail'];?></a></li>
					<li><span>Skype:</span><a href="skype:<?php echo $contact['skype'];?>"><?php echo $contact['skype'];?></a></li>
					<li><span>Facebook:</span><a href="<?php echo $contact['facebook'];?>"><?php echo $contact['facebook'];?></a></li>
				</ul>
			</div>
			
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
			<span>+7 (499) 951-03-20</span>
			<span><a href="mailto:info@pellini.ru">info@pellini.ru</a></span>
		</div>
		<div class="logo-footer"><a href=""><img src="../img/logo-footer.png" alt=""/></a></div>
		<div class="location-footer">
			БЦ "Верейская Плаза", <a href="">ул. Верейская 29, стр 154 </a>
			<div>офис 15, Москва, 121357</div>
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
				<form>
					<div class="form-group">
						<label for="address">location:</label>
						<input type="text" name="address_place" value="<?php echo $contact['address_place'];?>" class="form-control" id="address_place"/>
					</div>
					<div class="form-group">
						<label for="address">address_street:</label>
						<input type="text" name="address_street" value="<?php echo $contact['address_street'];?>" class="form-control" id="address_street"/>
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