<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<div id="content-wrapper">	
	<div id="full-wrapper" class="shoppage">
        <div style="clear: both;"></div>
		
		<div class="header"><img src="<?php the_field('banner_image', '15'); ?>"></div>

		<div id="shop-linkbar"><?php wp_nav_menu( array('theme_location' =>   'secondary' ) ); ?></div>

		<div class="shop-body">
			<?php $args = array( 'post_type' => 'shop', 'shopcat' => $term->slug, 'posts_per_page' => '40' );
			$query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : ?>
				<ul class="theproducts">
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<?php get_template_part( 'content', 'product' ); ?>
				<?php endwhile; ?>
			</ul>
			<div class="navigation">
				<div class="load-more">
					<div class="left"><?php previous_posts_link('Go Back') ?></div>
					<div class="right"><?php next_posts_link('Keep Browsing') ?></div>
				</div>
				<div class="type"><?php echo $term->name; ?> / </div><?php wp_pagenavi(); ?>
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
		</div>						
					
	</div>
</div>		
</div>
<?php get_footer('full'); ?>