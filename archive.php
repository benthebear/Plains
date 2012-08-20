<?php get_header(); ?>

  <!-- Start Arena -->
  <div class="region region-arena">
  <h1>
		<?php if ( is_day() ) : ?>
			<?php printf( __( 'Daily Archives: %s', '' ), '' . get_the_date() . '' ); ?>
		<?php elseif ( is_month() ) : ?>
			<?php printf( __( 'Monthly Archives: %s', '' ), '' . get_the_date('F Y') . '' ); ?>
		<?php elseif ( is_year() ) : ?>
			<?php printf( __( 'Yearly Archives: %s', '' ), '' . get_the_date('Y') . '' ); ?>
		<?php else : ?>
			<?php _e( 'Blog Archives', '' ); ?>
		<?php endif; ?>
	</h1>
	
	<?php if(is_day() or is_month() or is_year()){
    $firstyear = plains_get_first_year();
    $firstyear = "2001";
    $lastyear = date("Y");      
    ?>
    
    <p>
      <?php
      $links = array();
      for($i = $firstyear; $i<=$lastyear; $i++){
        if($i ==  get_the_time('Y')){
          $links[] = $i;
        }else{
          $links[] = '<a '.$class.' href="'.get_option('home')."/".$i.'">'.$i.'</a>';
        }                    
      }
      $string = implode(" | \n", $links);
      print $string."\n";
      ?>        
    </p>
       
    <p>
		  <?php
		  $months['01'] = __("January");
		  $months['02'] = __("February");
		  $months['03'] = __("March");
		  $months['04'] = __("April");
		  $months['05'] = __("May");
		  $months['06'] = __("June");
		  $months['07'] = __("July");
		  $months['08'] = __("August");
		  $months['09'] = __("September");
		  $months['10'] = __("October");
		  $months['11'] = __("November");
		  $months['12'] = __("December");
      $links = array();
      for($i = 1; $i<=12; $i++){
        if($i < 10 ){
          $number = "0".$i;
        }else{
          $number = $i;
        }
        if($i ==  get_the_time('m') and !is_year()){
          $links[] = $months[$number];
        }else{
          $links[] = '<a '.$class.' href="'.get_option('home')."/".get_the_time('Y').'/'.$number.'">'.$months[$number].'</a>';
        }                    
      }
      $string = implode(" | \n", $links);
      print $string."\n";
      ?>
		</p>
  <?}?>
  
  
  <?php if(is_day() or is_month()){?>
    <p>
      <?php
      $links = array();
      for($i = 1; $i<=31; $i++){
        if($i ==  get_the_time('d') and !(is_year() or is_month())){
          $links[] = $i;
        }else{
          $links[] = '<a '.$class.' href="'.get_option('home')."/".get_the_time('Y').'/'.get_the_time('m').'/'.$i.'">'.$i.'</a>';
        }                    
      }
      $string = implode(" | \n", $links);
      print $string."\n";
      ?>
    </p>    
  <?}?>
	
	<?php include (TEMPLATEPATH . '/nav.php' ); ?>

	<?php while (have_posts()) : the_post(); ?>
	
	<?php include (TEMPLATEPATH . '/teaser.php' ); ?>
	
	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/nav.php' ); ?>
	</div>
  <!-- End Arena -->
	
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
	