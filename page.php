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
			
			<p><?php print __('Categories').": "; the_category(', '); ?></p>
			<p><?php the_tags(__('Tags: '), ', ', ''); ?></p>
			<?php edit_post_link('<p>'.__('Edit this entry').'</p>'."\n",'',''); ?>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	</div>
  <!-- End Arena -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>