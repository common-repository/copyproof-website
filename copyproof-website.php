<?php
/*
Plugin Name: CopyProof Website
Plugin URI: https://store.devilhunter.net/wordpress-plugin/copyproof/
Description: Only Plugin activation is enough! No need to use any short-code or to edit settings.
Version: 2.0
Author: Tawhidur Rahman Dear
Author URI: https://www.tawhidurrahmandear.com/
Text Domain: tawhidurrahmandeartwo
License: GPLv2 or later 
 
 */
 
 // Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}
// 

function tawhidurrahmandeartwo()
	{
?> 
	
<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>
		
	<?php
	}

add_action('wp_head', 'tawhidurrahmandeartwo');
