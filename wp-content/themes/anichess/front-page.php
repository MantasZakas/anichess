
  <div class="container h-100 d-flex align-items-center">
    <div class="row">
      <div class="col-12">
        <div class="front">
          <?php echo wp_get_attachment_image(get_field('image'), 'full') ?>
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <h1><?php the_field('heading'); ?></h1>
              <div class="contact-form">
                <?php echo do_shortcode(get_field('form_code')) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


