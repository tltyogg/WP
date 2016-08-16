<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>

		<div class="shop-body">
			<?php if( have_rows('product') ): ?>

		<ul class="theproducts">

		<?php while( have_rows('product') ): the_row();

			// vars
			$image = get_sub_field('image');
			$name = get_sub_field('name');
			$price = get_sub_field('price');
			$link = get_sub_field('link');

			?>

			<li class="product"><a href="<?php echo $link; ?>" />

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			    <div class="footer">
						<div class="top"><?php echo $name; ?></div>
						<div class="bottom"><?php echo $price; ?></div>
					</div>

				</a>
			</li>

		<?php endwhile; ?>

		</ul>

	<?php endif; ?>
	</div>
<?php get_footer('full'); ?>
