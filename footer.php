	<footer class="region region-footer">
	<?php 			
			if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer')){
	        print "<ul>\n";
          dynamic_sidebar('footer');
          print "</ul>\n";
      }else{
        
        print "<p>".plains_get_first_year()." - ".date("Y")." ".get_bloginfo( 'name' )." – ".__('Some rights maybe reserved')."</p>";
      }			
	?>
	</footer>
  
	<?php wp_footer(); ?>	
	<!-- Number of Queries [<?php echo get_num_queries(); ?>] -->
</body>
</html>
