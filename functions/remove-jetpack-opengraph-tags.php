<?php
//We set custom opengraph tags that jetpack interferes with

add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );
?>