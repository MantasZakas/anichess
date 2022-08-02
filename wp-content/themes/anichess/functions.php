<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//custom admin logo

function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.svg");
      width: 100%;
      background-position: center;
      background-size: contain;
    }
  </style>
<?php }

add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url() {
  return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');

//custom image sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
//  add_image_size( 'square', 300, 300, true );
}

//acf settings pages
acf_add_options_page(array(
  'page_title' 	=> 'Global settings',
  'menu_title'	=> 'Global settings',
  'menu_slug' 	=> 'theme-general-settings',
  'capability'	=> 'edit_posts',
  'redirect'		=> true
));

acf_add_options_sub_page(array(
  'page_title' 	=> 'Global settings',
  'menu_title'	=> 'Global settings',
  'parent_slug'	=> 'theme-general-settings',
));

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});

//fix discord sharing

add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
  unset($data['author_url']);
  unset($data['author_name']);
  return $data;
}
