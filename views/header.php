<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="<?php Asset::img('favicon.ico') ?>" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <title><?php bloginfo('name'); if(wp_title('', false)) { echo '|'; } else { echo bloginfo('description'); } wp_title(''); ?></title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php Asset::css('bootstrap.min') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('font-awesome.min') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('flaticon') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('slicknav.min') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('jquery-ui.min') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('owl.carousel.min') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('animate') ?>"/>
	<link rel="stylesheet" href="<?php Asset::css('style') ?>"/>


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section" dir="rtl">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 text-center text-lg-left">
					<!-- logo -->
					<a href="./index.html" class="site-logo">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="col-xl-6 col-lg-5">
					<form class="header-search-form" dir="rtl">
						<input type="text" placeholder="جستجو در فلان">
						<button><i class="flaticon-search"></i></button>
					</form>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="user-panel" dir="rtl">
						<div class="up-item">
							<i class="flaticon-profile"></i>
							<a href="#">ورود</a> یا <a href="#">ثبت نام</a>
						</div>
						<div class="up-item">
							<div class="shopping-card">
								<i class="flaticon-bag"></i>
								<span><?php echo basket::total_count();?></span>
							</div>
							<a href="#">سبد خرید</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="main-navbar" dir="rtl">
		<div class="container">
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="#">خانه</a></li>
				<li><a href="#">زنانه</a></li>
				<li><a href="#">مردانه</a></li>
				<li><a href="#">جواهرات
						<span class="new">جدید</span>
					</a></li>
				<li><a href="#">کفش</a>
					<ul class="sub-menu">
						<li><a href="#">ساقدار</a></li>
						<li><a href="#">دمپایی ها</a></li>
						<li><a href="#">رسمی</a></li>
						<li><a href="#">چکمه ها</a></li>
						<li><a href="#">کتانی ها</a></li>
					</ul>
				</li>
				<li><a href="#">صفحات</a>
					<ul class="sub-menu">
						<li><a href="./product.html">صفحه محصول</a></li>
						<li><a href="./category.html">صفحه دسته بندی ها</a></li>
						<li><a href="./cart.html">صفحه پرداخت</a></li>
						<li><a href="./checkout.html">صفحه تایید</a></li>
						<li><a href="./contact.html">ارتباط با ما</a></li>
					</ul>
				</li>
				<li><a href="#">بلاگ</a></li>
			</ul>
		</div>
	</nav>

</header>

<!-- Header section end -->