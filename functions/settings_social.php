<?php
//Settings
// from https://trepmal.com/2011/03/07/add-field-to-general-settings-page/
$new_general_setting = new new_general_setting();

class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'twitter', 'esc_attr' );
        add_settings_field('twitter', '<label for="twitter">'.__('Twitter' , 'twitter' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'twitter', '' );
        echo '<input type="text" id="twitter" name="twitter" value="' . $value . '" />';
    }
}
?>