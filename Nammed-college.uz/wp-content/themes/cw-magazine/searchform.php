<?php
/**
 * The template for displaying search forms in cw-magazine
 *
 * @package cw-magazine
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'cw-magazine' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'izlash &hellip;', 'placeholder', 'cw-magazine' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'cw-magazine' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Izlash', 'submit button', 'cw-magazine' ); ?>">
</form>