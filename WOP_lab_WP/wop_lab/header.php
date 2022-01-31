<?php

/**
 * The header for our theme
 *
 * @package WOP_lab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Gulp pack for easy html/php markup development">
	<meta name="keywords" content="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> -->
	<!-- <link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/style.min.css"> -->
	<title>WOP lab</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header__top">
			<div class="header__top-box-left">
				<label for="Language" class="form-label">Language:</label>
				<select class="select select_language" name="Language" id="Language">
					<option value="value1" name="English 1">English 1</option>
					<option value="value2" name="English 2" selected>English 2</option>
					<option value="value3" name="English 3">English 3</option>
				</select>
				<label for="Currency" class="form-label">Currency:</label>
				<select class="select select_currency" name="Currency" id="Currency">
					<option value="value1" name="Currency 1">USD 1</option>
					<option value="value2" name="Currency 2" selected>USD 2</option>
					<option value="value3" name="Currency 3">USD 3</option>
				</select>
			</div>
			<div class="header__top-box-right">
				<nav class="header__top-nav">
					<ul class="header__top-nav-list">
						<li class="header__top-nav-item">
							<a class="header__top-nav-link" href="#">Account</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-link" href="#">Wishlist</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-link" href="#">Checkout</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-link" href="#">Log In</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-link" href="#">Sign Up</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="container">
			<div class="header__main">
				<div class="logo">
					<img class="logo__img" src="img/logo-img.png" alt="logo">
					<!--надо svg-->
				</div>
				<nav class="main__menu">
					<ul class="main__menu-list">
						<li class="main__menu-item">
							<a class="main__menu-item-link" href="#">Home</a>
						</li>
						<li class="main__menu-item">
							<a class="main__menu-item-link" href="#">women</a>
						</li>
						<li class="main__menu-item">
							<a class="main__menu-item-link" href="#">men</a>
						</li>
						<li class="main__menu-item">
							<a class="main__menu-item-link" href="#">other</a>
						</li>
						<li class="main__menu-item">
							<a class="main__menu-item-link" href="#">purchase</a>
						</li>
					</ul>
				</nav>
				<div class="header__main-right-box">
					<input class="search" type="search">
					<a class="header__round-btn btn_wishlist" href="#">
						<img src="img/btn_wishlist.svg" alt="#">
					</a>
					<a class="header__round-btn btn_cart" href="#">
						<img src="img/btn_cart.svg" alt="#">
					</a>
				</div>
			</div>
		</div>
	</header>