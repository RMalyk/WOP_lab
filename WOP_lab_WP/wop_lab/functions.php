<?php

/**
 * WOP_lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WOP_lab
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wop_lab_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WOP_lab, use a find and replace
		* to change 'wop_lab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('wop_lab', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'wop_lab'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wop_lab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'wop_lab_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wop_lab_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wop_lab_content_width', 640);
}
add_action('after_setup_theme', 'wop_lab_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wop_lab_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wop_lab'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wop_lab'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wop_lab_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wop_lab_scripts()
{
	wp_enqueue_style('libs', get_template_directory_uri() . '/css/libs.min.css', array(), _S_VERSION);
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.min.css', array(), _S_VERSION);

	wp_enqueue_script('scripts-libs', get_template_directory_uri() . '/js/libs.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.min.js', array(), _S_VERSION, true);


	// wp_enqueue_style( 'wop_lab-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'wop_lab-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'wop_lab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action('wp_enqueue_scripts', 'wop_lab_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}










add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('CAR', [
		'label'  => null,
		'labels' => [
			'name'               => 'Car',
			'singular_name'      => 'Car',
			'add_new'            => 'Add Car',
			'add_new_item'       => 'Add Car',
			'edit_item'          => 'Edit Car',
			'menu_name'          => 'Car',
		],
		'description'         => '',
		'public'              => true,
		'supports'            => ['title','thumbnail'],
	]);
}




add_action('init', 'create_taxonomy'); // надо отрефакторить и вынести в отдельную функцию
function create_taxonomy()
{

	register_taxonomy('brand', ['car'], [
		'labels'                => [
			'name'              => 'brand',
			'menu_name'         => 'brand',
		],
	]);

	register_taxonomy('country', ['car'], [
		'labels'                => [
			'name'              => 'country',
			'menu_name'         => 'country',
		],
	]);
	register_taxonomy('manufacturer', ['car'], [
		'labels'                => [
			'name'              => 'manufacturer',
			'menu_name'         => 'manufacturer',
		],
	]);
}









add_action('add_meta_boxes', 'car_extra_fields', 1);

function car_extra_fields()
{
	add_meta_box('extra_fields', 'Дополнительные поля', 'car_extra_fields_box_func', 'car', 'normal', 'high');
}






// код блока
function car_extra_fields_box_func($post)
{
?>
	<p><label><input type="color" name="extra[color]" value="<?php echo get_post_meta($post->ID, 'color', 1); ?>" /> Выбирите цвет</label></p>


	<p><select name="extra[fuel]">
			<?php $sel_v = get_post_meta($post->ID, 'fuel', 1); ?>
			<option value="0">----</option>
			<option value="gas" <?php selected($sel_v, 'gas') ?>>gas</option>
			<option value="petrol" <?php selected($sel_v, 'petrol') ?>>petrol</option>
			<option value="electro" <?php selected($sel_v, 'electro') ?>>electro</option>
		</select> Укажите вид топлива</p>


	<p><label><input type="number" name="extra[power]" value="<?php echo get_post_meta($post->ID, 'power', 1); ?>" /> Укажите мощность двигателя</label></p>


	<p><label><input type="number" name="extra[price]" value="<?php echo get_post_meta($post->ID, 'price', 1); ?>" /> Укажите стоимость автомобиля</label></p>



	<p>Опишите состояние автомобиля:
		<textarea type="text" name="extra[description]" style="width:100%;height:150px;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
	</p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php
}














// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

## Сохраняем данные, при сохранении поста
function my_extra_fields_update($post_id)
{
	// базовая проверка
	if (
		empty($_POST['extra'])
		|| !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__)
		|| wp_is_post_autosave($post_id)
		|| wp_is_post_revision($post_id)
	)
		return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('sanitize_text_field', $_POST['extra']); // чистим все данные от пробелов по краям
	foreach ($_POST['extra'] as $key => $value) {
		if (empty($value)) {
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}

	return $post_id;
}
