<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
show_admin_bar(false);
function path()
{
    echo get_template_directory_uri() . '/';
}

function the_image($name, $id = 12)
{
    echo 'src="' . get_field($name, $id)['url'] . '" ';
    echo 'alt="' . get_field($name, $id)['alt'] . '" ';
}

function repeater_image($name)
{
    echo 'src="' . get_sub_field($name)['url'] . '" ';
    echo 'alt="' . get_sub_field($name)['alt'] . '" ';
}

function pre($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

if (function_exists('acf_add_options_page')) {

    $main = acf_add_options_page(array(
        'page_title' => 'Настройки темы',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => 2,
        'icon_url' => 'dashicons-admin-customizer',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Хедер',
        'menu_title' => 'Хедер',
        'parent_slug' => $main['menu_slug'],
        'menu_slug' => 'header'
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Футер',
        'menu_title' => 'Футер',
        'parent_slug' => $main['menu_slug'],
        'menu_slug' => 'footer'
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Модалки',
        'menu_title' => 'Модалки',
        'parent_slug' => $main['menu_slug'],
        'menu_slug' => 'modal'
    ));
}
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_action( 'admin_menu', 'linked_url' );
function linked_url() {
    //add_menu_page( 'linked_url', 'Contact form', 'read', 'my_slug', '', 'dashicons-text', 1 );
}
if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => 'Назад',
			'next_text'    => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
		if( is_array( $links ) ) {
			echo '<ul class="pagination">';
			foreach ( $links as $link ) {
				if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
				else echo "<li>$link</li>";
			}
			echo '</ul>';
		}
	}
}
add_action( 'admin_menu' , 'linkedurl_function' );
function linkedurl_function() {
    global $menu;
    $menu[1][2] = "/wp-admin/form.php";
}
