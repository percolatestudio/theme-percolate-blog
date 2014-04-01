<?php
/*
	Plugin Name: Custom Write Panel
	Plugin URI: http://wefunction.com/2008/10/tutorial-create-custom-write-panels-in-wordpress
	Description: Allows custom fields to be added to the WordPress Post Page. Adapted by Víctor García (http://wpesp.com) - WPESP Theme Portfolio
	Version: 1.0
	Author: Spencer
	Author URI: http://wefunction.com
/* ----------------------------------------------*/

	$meta_boxes =
	array(
	"summary" => array(
	"name" => "subtitle",
	"std" => "",
	"title" => "Write a subtitle",
	"description" => "This is displayed along with your post title"), // "," Important to separate arrays
	);

	function meta_boxes() {
		global $post, $meta_boxes;
		foreach($meta_boxes as $meta_box) {
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

			if($meta_box_value == "")
			$meta_box_value = $meta_box['std'];

			echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

			echo'<h2>'.$meta_box['title'].'</h2>';

			echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';

			echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
		}
	}


	function create_meta_box() {
		global $theme_name;

		if ( function_exists('add_meta_box') )
			add_meta_box( 'meta-boxes', 'subtitle', 'meta_boxes', 'post', 'normal', 'high' );
	}



	function save_postdata( $post_id ) {
		global $post, $meta_boxes;
		foreach($meta_boxes as $meta_box) {
		// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
				return $post_id;
			}

			if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
					return $post_id;
			} else {
				if ( !current_user_can( 'edit_post', $post_id ))
					return $post_id;
			}

			$data = $_POST[$meta_box['name'].'_value'];

			if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
				add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
			elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
				update_post_meta($post_id, $meta_box['name'].'_value', $data);
			elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	}

	function save_pagedata( $post_id ) {
		global $post, $hcard_meta_boxes;
		foreach($hcard_meta_boxes as $meta_box) {
		// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
				return $post_id;
			}

			if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
					return $post_id;
			} else {
				if ( !current_user_can( 'edit_post', $post_id ))
					return $post_id;
			}

			$data = $_POST[$meta_box['name'].'_value'];

			if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
				add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
			elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
				update_post_meta($post_id, $meta_box['name'].'_value', $data);
			elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	}

	add_action('admin_menu', 'create_meta_box');
	add_action('save_post', 'save_postdata');
	add_action('save_post', 'save_pagedata');
?>