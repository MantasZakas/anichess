<div class="container h-100 d-flex align-items-center">
  <div class="row">
    <div class="col-12">
      <div class="front">
        <?php echo wp_get_attachment_image(get_field('image'), 'full') ?>
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <h1 data-aos="fade"><?php the_field('heading'); ?></h1>
            <div class="contact-form" data-aos="fade" data-aos-delay="300">
              <?php echo do_shortcode(get_field('form_code')) ?>
            </div>
          </div>
        </div>
      </div>
      <ul class="front-social" data-aos="fade" data-aos-delay="600">
         <?php if (have_rows('social')):
             while (have_rows('social')) : the_row();
              $link = get_sub_field('link')?>
                <li>
                  <a href="<?php echo $link['url'] ?>"
                     target="<?php echo $link['target'] ?>">
                    <?php echo $link['title'] ?>
                    <?php echo wp_get_attachment_image(get_sub_field('icon'),'full') ?>
                  </a>
                </li>
             <?php endwhile;
          endif; ?>
      </ul>
    </div>
  </div>
</div>


