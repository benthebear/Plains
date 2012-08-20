<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?>
    <!-- Start Main Sidebar, Marginalia -->
    <div class="region region-sidebar region-marginalia">
    
    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
    <aside>
    	<?php get_search_form(); ?>
    </aside>

    <aside>	
	    <h2><?php print(__('Pages'))?></h2>
      <ul>
    	<?php wp_list_pages(array('title_li' => '')); ?>
      </ul>
    </aside>	
    
    <aside>	
      <h2><?php print(__('Cagtegories'))?></h2>
      <ul>
      <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
    </aside>
    
    <aside>	
    	<h2><?php print(__('Archives'))?></h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>       
    </aside>  
      
    <aside>	
      <h2><?php print(__('Links'))?></h2>
      <ul>  
    	<?php wp_list_bookmarks(); ?>
    	</ul>
    </aside>
    
    <aside>	
    	<h2><?php print(__('Meta'))?></h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="<?php print(__('Proudly powered by the Personal Publishing Plattform Wordpress.'));?>">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    </aside>	
    	
    <aside>		
    	<h2><?php print(__('Subscribe'))?></h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php print(__('Entries (RSS)'));?></a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php print(__('Comments (RSS)'));?></a></li>
    	</ul>
    </aside>	
	
	  </div>
	  <!-- End Main Sidebar, Marginalia -->
	
<?php endif; ?>
