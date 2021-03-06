<?php
/**
 * After Header 4 Columns Sidebar Template
 *
 * Displays widgets for the After Header 4 Columns dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package Fanwood
 * @subpackage Template
 */

if ( is_active_sidebar( 'after-header-4c' ) ) : ?>

	<?php do_atomic( 'before_sidebar_after_header_4c' ); // fanwood_before_sidebar_after_header_4c ?>

	<div id="sidebar-after-header-4c" class="sidebar sidebar-4c sidebar-after-header">
	
		<div class="sidebar-wrap">

			<?php do_atomic( 'open_sidebar_after_header_4c' ); // fanwood_open_sidebar_after_header_4c ?>

			<?php dynamic_sidebar( 'after-header-4c' ); ?>

			<?php do_atomic( 'close_sidebar_after_header_4c' ); // fanwood_close_sidebar_after_header_4c ?>
		
		</div><!-- .sidebar-wrap -->

	</div><!-- #sidebar-after-header-4c -->

	<?php do_atomic( 'after_sidebar_after_header_4c' ); // fanwood_after_sidebar_after_header_4c ?>

<?php endif; ?>