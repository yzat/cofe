<?php
	header('Content-Type:text/html;charset=utf-8');
	require 'lib/db_bez_ses.php';
	$category=$db->get('category');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Каталог</title>
		<!--[if IE]><script src="js/html5.js"></script><![endif]-->

		<!-- favicon -->
		<link href="favicon.ico" rel="shortcut icon">

		<!-- Main style -->
		<link href="css/widgets.css" rel="stylesheet" media="screen">
		<link href="css/all.css" rel="stylesheet" media="screen">

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" media="screen, projection"><![endif]-->

		<!-- Jquery library -->
		<script src="js/jquery-1.8.2.min.js"></script>
		<!-- UI -->
		<script src="js/jquery-ui-1.9.0.custom.min.js"></script>
		<!-- Widgets -->
		<script src="js/widgets.js"></script>
		<!-- Main functions -->
		<script src="js/functions.js"></script>
		<!--my function-->
		<script src="js/my_function.js"></script>
	</head>
	<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="max-wrap">
				<div class="top-line">
					<div class="logo"><a href=""><img src="img/logo.png" alt=""/></a></div>
					<nav class="nav">
						<ul class="nav-list">
							<li><a href="index.php">о компании</a></li>
							<li class="active"><a href="catalog.php">Каталог</a></li>
							<li><a href="about2.php">наш кофе</a></li>
							<li><a href="horeca.php">Horeca</a></li>
							<li><a href="contacts.php">Контакты</a></li>
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
				<!-- conteiner -->
				<div class="conteiner">
					<!-- content-inner -->
					<div class="content-inner">
						<div class="catalog-holder">
							<h1>Кофе</h1>
							<div class="catalog-items">
								<div class="catalog-item">
									<a href=""><figure><img src="pic/product/img01.jpg" alt=""/></figure></a>
									<div class="description">
										<h2><a href="">Pellini в зернах</a></h2>
										<span>Кофе в зернах. Упаковка 1кг.</span>
										<div class="short-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
										</div>
										<div class="full-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
										</div>
										<div class="type">
											<i class="icon-equipment-small"></i>
											<span>Оборудование : <a href="">профессиональное</a>, <a href="">автоматическое</a></span>
										</div>
										<a href="" class="more">Подробнее</a>
									</div>
								</div>
								<div class="catalog-item">
									<a href=""><figure><img src="pic/product/img02.jpg" alt=""/></figure></a>
									<div class="description">
										<h2><a href="">Pellini молотый</a></h2>
										<span>Молотый кофе. Банка 250 грамм.</span>
										<div class="short-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
										</div>
										<div class="full-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным </p>
										</div>
										<div class="type">
											<i class="icon-equipment-small"></i>
											<span>Оборудование : <a href="">профессиональное</a>, <a href="">автоматическое</a></span>
										</div>
										<a href="" class="more">Подробнее</a>
									</div>
								</div>
								<div class="catalog-item">
									<a href=""><figure><img src="pic/product/img03.jpg" alt=""/></figure></a>
									<div class="description">
										<h2><a href="">Pellini TOP в капсулах</a></h2>
										<span>Упаковка 150 капсул по 7 грамм.</span>
										<div class="short-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным послевкусием. Роскошный кофе для настоящих гурманов.</p>
										</div>
										<div class="full-story">
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным послевкусием. Роскошный кофе для настоящих гурманов.</p>
											<p>Кофе средней обжарки. Прекрасный купаж нескольких сортов арабики из Кении, Эфиопии, Бразилии и Центральной Америки. Имеет ровный, мягкий вкус с шоколадно-кремовым оттенком и великолепным послевкусием. Роскошный кофе для настоящих гурманов.</p>
										</div>

										<div class="type">
											<i class="icon-equipment-small"></i>
											<span>Оборудование : <a href="">капсульное оборудование</a></span>
										</div>
										<a href="" class="more">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- content-inner end -->
				</div>
				<!-- conteiner end -->

				<!-- sidebar -->
				<aside class="sidebar">
					<!-- catalog-list -->

					<ul class="catalog-list">
						<?php
							foreach ($category as $key=>$item):
						?>
							<li ><a href="javascript:void(0);" onclick="get_category_id('<?php echo $item['id'];?>')"><?php echo $item['category'];?></a></li>
						<?php
							endforeach;
						?>
					</ul>
					<!-- catalog-list end -->

					<div class="filter">
						<div class="filter-box">
							<h2>Бренды</h2>
							<div class="checkbox-hodler"><label><input type="checkbox" class="all" />Все</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" checked />Pellini</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Lofbergs Lilla</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Black Professional</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Grunewald</label></div>
						</div>
						<div class="filter-box">
							<h2>Группы товаров</h2>
							<div class="checkbox-hodler"><label><input type="checkbox" class="all" />Все</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" checked />Pellini  Top</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" checked />Pellini</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Ритейл</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" checked />Капсулы и чалды</label></div>
						</div>
						<div class="filter-box">
							<h2>По типу</h2>
							<div class="checkbox-hodler"><label><input type="checkbox" class="all" />Все</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Капсулы</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Чалды</label></div>
							<div class="checkbox-hodler"><label><input type="checkbox" />Зёрна</label></div>
						</div>
					</div>

				</aside>
				<!-- sidebar end -->
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
			<div class="logo-footer"><a href=""><img src="img/logo-footer.png" alt=""/></a></div>
			<div class="location-footer">
				БЦ "Верейская Плаза", <a href="">ул. Верейская 29, стр 154 </a>
				<div>офис 15, Москва, 121357</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->
	</body>
</html>