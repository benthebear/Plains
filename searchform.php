<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <label for="s"><?php print __('Search')?>:</label>
        <input type="text" id="s" name="s" value="" />        
        <input type="submit" value="<?php print __('Search');?>" id="searchsubmit" />
    </div>
</form>