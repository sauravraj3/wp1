<?php
/**
 * Search Form
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

// Fetching the searchbar text from the theme options.
$search_text = esc_attr( cyberchimps_get_option( 'searchbar_text' ) );
if( !$search_text )
	$search_text = esc_attr( 'Search &hellip;', 'blox' );
?>
<form method="get"  id="searchform" class="navbar-search pull-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" class="search-query input-medium" name="s" placeholder="<?php echo $search_text; ?>" />
</form>
<div class="clear"></div>
