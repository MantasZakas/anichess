<?php

use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('components/head'); ?>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FQ6Z97"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--[if IE]>
<div class="alert alert-warning">
  <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
  browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->


  <?php get_fields();
  do_action('get_header');
  get_template_part('components/header');
  ?>
  <div id="pageWrap" class="page-wrap init <?php echo is_front_page() ? 'page-wrap--front' : '' ?>">
    <?php include Wrapper\template_path(); ?>
  </div>
  <?php
do_action('get_footer');
if (!is_front_page()) {
  get_template_part('components/footer');
}
wp_footer();
?>
</body>
</html>
