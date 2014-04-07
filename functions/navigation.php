<?php
//
//Navigation
//

function dd_get_page_link_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) :
		return get_permalink( $page->ID );
	else :
		$page = get_page_by_path($page_slug.'s');
		if ($page) :
			return get_permalink( $page->ID );
		else :
			return "#";
		endif;
	endif;
}


function dd_comment_link() {
	global $post;
	if($post->comment_count==0){
		$o = "<a href='".get_permalink()."#respond' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink zero'>";
			$o .= $post->comment_count;
		$o .= " comments</a>";
	} else if($post->comment_count==1){
		$o = "<a href='".get_permalink()."#respond' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink zero'>";
			$o .= $post->comment_count;
		$o .= " comment</a>";
	} else {
		$o = "<a href='".get_permalink()."#comments' title='".wp_specialchars(strip_tags(the_title('', '', false)),1)."' class='commentslink'>";
			$o .= $post->comment_count;
		$o .= " comments</a>";
	}
	echo $o;
}

function dr_previous_posts_link($label = '', $pre = '', $post = '') {
	ob_start();
	previous_posts_link($label);
	$buffer = ob_get_contents();
	ob_end_clean();
	if(!empty($buffer)) echo $pre,$buffer,$post;
}

function dr_next_posts_link($label = '', $pre = '', $post = '') {
	ob_start();
	next_posts_link($label);
	$buffer = ob_get_contents();
	ob_end_clean();
	if(!empty($buffer)) echo $pre,$buffer,$post;
}

function dr_previous_comments_link($label = '', $pre = '', $post = '') {
	ob_start();
	previous_comments_link($label);
	$buffer = ob_get_contents();
	ob_end_clean();
	if(!empty($buffer)) echo $pre,$buffer,$post;
}

function dr_next_comments_link($label = '', $pre = '', $post = '') {
	ob_start();
	next_comments_link($label);
	$buffer = ob_get_contents();
	ob_end_clean();
	if(!empty($buffer)) echo $pre,$buffer,$post;
}

//Link for next and previous classes
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn-secondary"';
}


?>