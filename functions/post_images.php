<?php
//
//Function to pull any ol'image out if the thumbnail is not set
//

function post_image($size = thumbnail) {	
		if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'post_status' => 'inherit',
		'numberposts' => 1,
		'post_mime_type' => 'image',
		'order' => 'ASC',
		'orderby' => 'menu_order ID',
		)))
		{
			$i = 0;
			foreach( $images as $image ) {
				$attachmenturl=wp_get_attachment_image_src($image->ID, $size);
				$attachmentimage=wp_get_attachment_image( $image->ID, $size );
				$imagelink=get_permalink($image->post_parent);
				$img_desc = $image->post_excerpt;
				
				echo ''.$attachmentimage.apply_filters('the_title', $parent->post_title).'';
				//if you want to link to the image directly replace $imagelink with $attachmenturl//	
				
			 	$i++;
			}
		} 
}//end of function//
?>