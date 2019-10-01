/*  Code to put on your theme function.php  */

//***************** CHANGE GRAVITY FORM BUTTON FROM INPUT TO BUTTON *//

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button gform_button' id='gform_submit_button_{$form['id']}'><i class='far fa-paper-plane'></i><span>Submit</span></button>";
}

//***************** CHANGE GRAVITY FORM SPINNER *//

add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
    return get_template_directory_uri()."/images/loading.gif";
}
