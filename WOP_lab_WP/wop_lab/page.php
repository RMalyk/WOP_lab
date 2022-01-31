<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WOP_lab
 */

get_header();
?>


<main class="page-main">
	<div class="slider">
		<div class="slider__item">
			<img class="slider__img" src="img/slider/slider-img-1.jpg" alt="#">
			<p class="slider__text"><span>ALUMINUM CLUB</span>Experience Ray-Ban</p>
		</div>
		<div class="slider__item">
			<img class="slider__img" src="img/slider/slider-img-1.jpg" alt="#">
			<p class="slider__text"><span>ALUMINUM CLUB</span>Experience Ray-Ban</p>
		</div>
		<div class="slider__item">
			<img class="slider__img" src="img/slider/slider-img-1.jpg" alt="#">
			<p class="slider__text"><span>ALUMINUM CLUB</span>Experience Ray-Ban</p>
		</div>
	</div>
	<div class="container">
		<section class="section__cards">
			<div class="section__title">Featured Products</div>
			<div class="crads">

				<?php

				$cars = get_posts(
					array(
						'post_type'   => 'car',
					)
				);




				foreach ($cars as $car) {
					$price = get_post_meta($car->ID, 'price');
					$color = get_post_meta($car->ID, 'color');
				?>
					<div class="crad__item">
						<div class="card-header">

							<?php
							$thumbnail = get_the_post_thumbnail($car->ID, array(200, 200), array('class' => "card-img",));
							if ($thumbnail) {
								echo $thumbnail;
							} ?>

						</div>
						<div class="card-body">
							<div class="product__info">
								<a href="google.com">
									<h6 class="product__info-title"><?php echo $car->post_title ?></h6>
								</a>
								<div class="product__info-price"><span class="product__info-price-discount">$ <?php echo $price[0]; ?></span>
									<span class="discount">$ <?php echo $price[0]; ?></span>
								</div>
								<input class="product__info-color" type="color" value="<?php echo $color[0]; ?>" disabled>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>
		</section>
	</div>
</main>







<?php
// get_sidebar();
get_footer();
