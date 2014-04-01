<?php
//Twitter and Facebook links for the authors
//we dont use the FB at the moment
function my_new_contactmethods( $contactmethods ) {
// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
$contactmethods['facebook'] = 'Facebook';

return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);

?>