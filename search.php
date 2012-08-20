<?php get_header(); ?>
  
  <!-- Start Arena -->
  <div class="region region-arena">
	<?php if (have_posts()) : ?>
	
	<h2><?php print __('Search Results'); ?></h2>
	
	<?php get_search_form(); ?>
	
	<?php include (TEMPLATEPATH . '/nav.php' ); ?>  
	  
	<?php  while (have_posts()) : the_post(); ?>	

	<?php include (TEMPLATEPATH . '/teaser.php' ); ?>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/nav.php' ); ?>

	<?php else : ?>

		<h2><?php print __('Not found');?></h2>
		
		<?php get_search_form(); ?>

	<?php endif; ?>
	</div>
  <!-- End Arena -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>