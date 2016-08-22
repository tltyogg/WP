<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>
<div id="content-wrapper">
	<div id="full-wrapper" class="shoppage">
        <div style="clear: both;"></div>

		<div id="shop-linkbar"><?php wp_nav_menu( array('theme_location' =>   'secondary' ) ); ?></div>

		<div class="shop-body">
			<?php
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$query = array( 'post_type' => 'shop', 'posts_per_page' => '40', 'paged'  => $paged );
			$wp_query = new WP_Query( $query ); if ( $wp_query->have_posts() ) : ?>
				<ul class="theproducts">
				<?php
				$image = get_field('image');
				$name = get_field('name');
				$price = get_field('price');
				$link = get_field('link');
				 while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


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

			<div class="navigation">
				<div class="load-more">
					<div class="left"><?php previous_posts_link('Go Back') ?></div>
					<div class="right"><?php next_posts_link('Keep Browsing') ?></div>
				</div>
			<?php endif; ?>
		</div>

		<div class="shop-bottom">
			<div class="left">
				<h3><?php the_field('help1', '15'); ?></h3>
				<h4><?php the_field('help2', '15'); ?></h4>
				<a href="/contact/">Contact Us ></a>
			</div>
			<div class="right">
				<div class="advert"><?php the_field('partners_image', '15'); ?></div>
			</div>
			<div style="clear: both;"></div>
			<div style="clear: both;"></div>
		</div>

	</div>
</div>
</div>
<?php get_footer('full'); ?>
