<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>

		<div class="shop-body">
			<?php if( have_rows('repeater_field_name') ): ?>

		<ul class="theproducts">

		<?php while( have_rows('product') ): the_row();

			// vars
			$image = get_sub_field('image');
			$name = get_sub_field('name');
			$price = get_sub_field('price');

			?>

			<li class="product">

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			    <?php echo $name; ?>
					<?php echo $price; ?>


			</li>

		<?php endwhile; ?>

		</ul>

	<?php endif; ?>
	</div>
<?php get_footer('full'); ?>
