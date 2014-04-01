<?php
function get_breadcrumbs()
{
	global $wp_query;

	if ( !is_home() ){

		// Start the UL
		echo '<div id="breadcrumbs">';
		// Add the Home link
		echo '<a href="'. get_settings('home') .'">'. get_bloginfo('name') .'</a>';

		if ( is_category() )
		{
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			echo ''. get_category_parents($cat, true, '', false) .'';
		}
		elseif (is_tax()) {
		  $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
		  echo '<span>'.$the_tax->labels->name.': ';
		  echo ''.single_term_title().'</span>';
		}
		elseif ( is_archive() && !is_category() )
		{
			echo "<span>Archives</span>";
		}
		elseif ( is_search() ) {

			echo "<span>Search Results</span>";
		}
		elseif ( is_404() )
		{
			echo "<span>404 Not Found</span>";
		}
		elseif ( is_single() )
		{
			$category = get_the_category();
			$category_id = get_cat_ID( $category[0]->cat_name );

			echo ''. get_category_parents( $category_id, TRUE, "" );
			echo '<span>'.the_title('','', FALSE) .'</span>';
		}
		elseif ( is_page() )
		{
			$post = $wp_query->get_queried_object();

			if ( $post->post_parent == 0 ){

				echo "<span>".the_title('','', FALSE)."</span>";

			} else {
				$title = the_title('','', FALSE);
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				array_push($ancestors, $post->ID);

				foreach ( $ancestors as $ancestor ){
					if( $ancestor != end($ancestors) ){
						echo '<a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a>';
					} else {
						echo '<span>'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</span>';
					}
				}
			}
		}

		// End the UL
		echo "</div>";
	}
}
?>