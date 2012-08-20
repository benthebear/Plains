  
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php if(has_post_thumbnail()){  print "<p><a href='".get_permalink()."'>".get_the_post_thumbnail(get_the_ID(), array('', ''))."</a></p>\n";  }?>
    <div>
<?php 
			$teasertext = "    ".get_the_content(__('Read more'))."\n"; 
  		if(strlen($teasertext)>500 and !(strpos($teasertext, "more-link"))){
  		  $teasertext  = "      <p>".get_the_excerpt()."</p>\n";
  		  $teasertext .= "      <p><a href='".get_permalink()."'>".__('Read more')."</a></p>\n";
  		}
  		print $teasertext;
			?>
    </div>
    <p><?php the_time('d. m. Y'); ?></p>
    <p><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments'), 'comments-link', ''); ?></p>
    <p><?php print __('Categories').": "; the_category(', '); ?></p>
    <p><?php the_tags(__('Tags: '), ', ', ''); ?></p>
    <hr/>
  </article>
	