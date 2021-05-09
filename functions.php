<?php 

// Include Framework, CSS and Fonts
// Scrips
function findwork_js() {
	wp_register_script('uikitjs', get_template_directory_uri() . 'uikit/dist/js/uikit.min.js', [], false, true);
	wp_register_script('uikitjs-icons', get_template_directory_uri() . 'uikit/dist/js/uikit-icons.min.js', ['uikitjs'], false, true);

	wp_enqueue_script( 'uikitjs-icons' );
 }
 add_action( 'wp_enqueue_script', 'findwork_js' );
 
// CSS
 function findwork_css() {
	wp_register_style('uikitcss', get_template_directory_uri() . 'uikit/dist/css/uikit.min.css', array(), false, false);
	wp_register_style('style', get_template_directory_uri() . 'style.css', array(), false, false);

	wp_enqueue_script( 'uikitcss', 'style' );
 }
 add_action( 'wp_enqueue_script', 'findwork_css' );

 // Fontes
 function findwork_fonts() {
	wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap', [], false, false);

	wp_enqueue_script( 'font' );
 }
 add_action( 'wp_enqueue_script', 'findwork_fonts' );

// Clean header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Custom Images Sizes
function my_custom_sizes() {
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

// Custom Post Type

function custom_post_type_vagas() {
	register_post_type('Vagas', array(
		'label' => 'Vagas',
		'description' => 'Vaga',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'Vaga', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Vagas',
			'singular_name' => 'Vaga',
			'menu_name' => 'Vagas',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Vaga',
			'edit' => 'Editar',
			'edit_item' => 'Editar Vaga',
			'new_item' => 'Nova Vaga',
			'view' => 'Ver Vaga',
			'view_item' => 'Ver Vaga',
			'search_items' => 'Procurar Vaga',
			'not_found' => 'Nenhum Vaga Encontrada',
			'not_found_in_trash' => 'Nenhum Vaga Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_vagas');
?>