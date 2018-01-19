<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
    	<label class="screen-reader-text" for="s"><?php _e( 'Enter search term(s)', 'presentation' ); ?></label>
        <input type="search" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <input type="submit" id="search-submit" value="Search" />
    </div>
</form>