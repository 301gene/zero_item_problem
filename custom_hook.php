<?php

/**
 * @tag my_ninja_forms_processing
 * @callback my_ninja_forms_processing_callback
 */
add_action( 'my_ninja_forms_processing', 'custom_item_list' );
/**
 * @param $form_data array
 * @return void
 */
function custom_item_list( $form_data ){
    $form_id       = $form_data[ 'form_id' ];
    $form_fields   =  $form_data[ 'fields' ];

    foreach( $form_fields as $field ){
        $field_id    = $field[ 'id' ];
        $field_key   = $field[ 'key' ];
        $field_value = $field[ 'value' ];
        
        // Example Field Key comparison
        if( 'my_field' == $field[ 'key' ] ){
            // This is the field that you are looking for.
        }
    }
    $form_settings = $form_data[ 'settings' ];
    $form_title    = $form_data[ 'settings' ][ 'title' ];
}

?>