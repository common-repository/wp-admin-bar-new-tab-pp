<?php
/*
Plugin Name: WP Admin Bar : new tab
Plugin URI: http://preukson.com
Description: WP Admin bar : new tab. Create by <a href="http://preukson.com/" title="David's Technical Musings">Preukson</a> 
Version: 1.0
Author: Preukson
Author URI: http://preukson.com
*/

function adminbar_blank() { ?>
<script type="text/javascript" media="screen">jQuery(document).ready(function(){jQuery('#wpadminbar .quicklinks  ul  li  a').attr('target','_blank');});</script>
<?php }
add_action('admin_head','adminbar_blank',100);
?>
