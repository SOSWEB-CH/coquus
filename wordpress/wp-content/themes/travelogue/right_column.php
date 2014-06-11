<?php
	if ( function_exists('dynamic_sidebar') && is_sidebar_active(2) ) {
		// there is active widgets for sidebar-1
		// do something
		echo '<div id="rightcolumn">'.PHP_EOL;
		dynamic_sidebar(2);
		echo '</div>'.PHP_EOL;
	} else {
		// no widget active for sidebar 2
		// do custom sidebar stuff ...
		
		// Actually in this case, we don't want to output anything.
	}
?>