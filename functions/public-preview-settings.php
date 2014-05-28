<?php
// Settings for the public post preview plugin
// http://wpgrafie.de/wp-plugins/public-post-preview/en/
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
	return 60 * 60 * 24 * 5; // 5 days
}
?>