<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
    <i class="fas fa-search"></i> <input type="search" class="search-field form-control" placeholder="<?php echo get_field('search_label','option'); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php echo get_field('search_label','option'); ?>">
</form>



