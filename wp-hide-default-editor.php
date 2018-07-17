<?php
add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
    $post_id = false ;

    if ( isset( $_GET[ 'post' ] ) ) {
        $post_id = $_GET[ 'post' ];
    }

    if( !isset( $post_id ) ) {
        return;
    }

    remove_post_type_support( 'page', 'editor' );
}
