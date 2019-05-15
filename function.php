<?php
function create_post_voiture(){
 register_post_type('voiture',
 array(
 'labels'=>array(
 'name'=>__('voitures'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','voiture');
 register_taxonomy_for_object_type('post_tag','voiture');
}
add_action('init','create_post_voiture');
function add_marque_meta_box(){
 add_meta_box(
 'marque_meta_box',// $id
 'marque',// $title
 'show_marque_meta_box',// $callback
 'voiture',// $screen
 'normal',// $context
 'high'// $priority
);
}
add_action('add_meta_boxes','add_marque_meta_box');
function show_marque_meta_box(){
global $post;
 $meta=get_post_meta($post->ID , 'marque' , true); ?>
<input type="hidden" name="your_meta_box_nonce" value="
 <?php echo wp_create_nonce(basename(__FILE__) );?>">
<!-- All fields will go here -->
 <?php
}
function save_marque_meta( $post_id ) {
// verify nonce
if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
 return $post_id;
}
// check autosave
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
 return $post_id;
}
// check permissions
if ( 'page' === $_POST['post_type'] ) {
 if ( !current_user_can( 'edit_page', $post_id ) ) {
 return $post_id;
 } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
 return $post_id;
 }
}

$old = get_post_meta( $post_id, 'marque', true );
$new = $_POST['marque'];
if ( $new && $new !== $old ) {
 update_post_meta( $post_id, 'marque', $new );
} elseif ( '' === $new && $old ) {
 delete_post_meta( $post_id, 'marque', $old );
}
}
add_action( 'save_post', 'save_marque_meta' );
function custom_settings_add_menu() {
 add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
