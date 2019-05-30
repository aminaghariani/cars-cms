<?php
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
?>
<?php
function show_marque_meta_box(){
global $post;
 $meta=get_post_meta($post->ID , 'marque' , true); ?>
<input type="hidden" name="your_meta_box_nonce" value="
 <?php echo wp_create_nonce(basename(__FILE__) );?>">
<!-- All fields will go here -->?>
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
?>
<?php
function custom_settings_add_menu() {
 add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
?>
<?php
function add_your_fields_meta_box(){
 add_meta_box(
 'your_fields_meta_box',// $id
 'Your Fields',// $title
 'show_your_fields_meta_box',// $callback
 'your_post',// $screen
 'normal',// $context
 'high'// $priority
);
}
add_action('add_meta_boxes','add_your_fields_meta_box');
// Create Custom Global Settings 
function custom_settings_page() { ?>
<div class="wrap">
<h1>Custom Settings</h1>
<form method="post" action="options.php">
<?php settings_fields( 'section' );
do_settings_sections( 'theme-options' );
submit_button(); ?>
</form>
</div>
<?php }
// Custom Post Type
<?php
function create_my_custom_post() {
register_post_type( 'my-custom-post',
array(
'labels' => array(
'name' => __( 'My Custom Post' ),
'singular_name' => __( 'My Custom Post' ),
),
'public' => true,
'has_archive' => true,
'supports' => array(
'title',
    'editor',
'thumbnail',
 'custom-fields'
)
));
}
add_action( 'init', 'create_my_custom_post' );
// Twitter
?>
<?php
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo
get_option( 'twitter' ); ?>" />
<?php }
function custom_settings_page_setup() {
add_settings_section( 'section', 'All Settings', null, 'theme-options' ); 
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
add_settings_field( 'github', 'GitHub URL', 'setting_github', 'themeoptions', 'section' );
register_setting( 'section', 'twitter' );
register_setting( 'section', 'github' );
?>
<?php get_header(); ?>
<div class="row">
<div class="col-sm-12">
<?php
$args = array(
'post_type' => 'my-custom-post',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query-
>the_post(); ?>
<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php
the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>
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
?>