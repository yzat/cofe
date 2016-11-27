<?php
	require  __DIR__."/../header.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Главная</title>
<!--[if IE]><script src="js/html5.js"></script><![endif]-->

<!-- favicon -->
<link href="favicon.ico" rel="shortcut icon">

<!-- Main style -->
<link href="../css/widgets.css" rel="stylesheet" media="screen">
<link href="../css/all.css" rel="stylesheet" media="screen">
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">

<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" media="screen, projection"><![endif]-->

<!-- Jquery library -->
<script src="../js/jquery_min.js"></script>
<!-- bootstrap library -->
<script src="../js/bootstrap.js"></script>
<!-- UI -->
<script src="../js/jquery-ui-1.9.0.custom.min.js"></script>
<!--Function for send from forms -->
<script src="../js/function_form_view.js"></script>
<!-- Widgets -->
<script src="../js/widgets.js"></script>
<!-- Main functions -->
<script src="../js/functions.js"></script>
</head>
<body>
<!-- wrapper -->
<div class="wrapper main-page">
	<!-- header -->
	<header class="header">
		<div class="max-wrap">
			<div class="top-line">
				<div class="logo"><img src="../img/logo.png" alt=""/></div>
				<nav class="nav">
					<ul class="nav-list">
						<li class="active"><a href="index.php">о компании</a></li>
						<li><a href="catalog.php">Каталог</a></li>
						<li><a href="about2.php">наш кофе</a></li>
						<li><a href="horeca.php">Horeca</a></li>
						<li><a href="contacts.php">Контакты</a></li>
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
			<div class="about-box">
				<h2>Культура кофе</h2>
				<div class="about-box-text">
					<p>Культура выживает в местах, где она может быть разделена. Именно это знание движет компанией в стремлении познакомить Россию с изысканной и утонченной культурой кофе.</p>
					<a href="">Подробнее</a>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
	
	<!-- content -->
	<div class="content">
		<!-- max-wrap -->
		<div class="max-wrap">
			<!-- category -->
			<div class="category">
				<ul class="category-list">
					<li>
						<a href="">
							<i class="icon-coffee"></i>
							<span>Кофе</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon-equipment"></i>
							<span>Оборудование</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon-delivery"></i>
							<span>HORECA</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- category end -->
			
			<!-- preview-product -->
			<div class="preview-product">
				<figure><img src="../pic/img01.jpg" alt=""/></figure>
				<div class="description">
					<h2><a href="">Pellini VIVACE N82</a></h2>
					<time class="time">07.10. 2013</time>
					<p>Мы рады анонсировать наш новый продукт - "Pellini VIVACE N82" 1кг зерно. Это прекрасная смесь 80-20 (арабика-робуста) с высочайшими...</p>
					<a href="" class="more">Все новости</a>
				</div>
			</div>
			<!-- preview-product end -->
			
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
		<div class="logo-footer"><img src="../img/logo-footer.png" alt=""/></div>
		<div class="location-footer">
			БЦ "Верейская Плаза", <a href="">ул. Верейская 29, стр 154 </a>
			<div>офис 15, Москва, 121357</div>
		</div>
	</div>
</footer>
<!-- footer end -->
<!--modal for avtorization-->
<div id="admin_avtorization" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Avtorizasia</h4>
			</div>
			<div class="modal-body">
				<form id="form_admin_data" action="javascript:void(0);" onSubmit="javascript:avtorizasia(this);return false;" role="form">
					<div class="form-group">
						<label for="usr">login:</label>
						<input type="text" name="login" class="form-control" id="usr">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
						<input type="hidden" name="target" value="avtorizasia_admin">
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<button type="submit" class="btn btn-default">Sign</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<!--end modal avtorization-->
</body>
</html>