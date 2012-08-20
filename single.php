<?php get_header(); ?>

  <!-- Start Arena -->
  <div class="region region-arena">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
      <?php if(has_post_thumbnail()){print "<p>".get_the_post_thumbnail(get_the_ID(), array('', ''))."</p>";}	?>
			<div>
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>		

			</div>
			<hr/>
			<p>
      	<?php print (__('Posted on the ')); the_time('d. m. Y'); ?>
      	<?php print (__('by ')); the_author(); ?>      	
      </p>
			<p><?php print __('Categories').": "; the_category(', '); ?></p>
			<p><?php the_tags(__('Tags: '), ', ', ''); ?></p>
			<?php previous_post_link('<p>'.__('Previous Entry').': %link </p>'."\n"); ?>
		  <?php next_post_link('<p>'.__('Previous Entry').': %link </p>'."\n"); ?>
			<?php edit_post_link('<p>'.__('Edit this entry').'</p>'."\n",'',''); ?>
			<hr/>
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	</div>
  <!-- End Arena -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>