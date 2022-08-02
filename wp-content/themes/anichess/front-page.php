<div class="section" data-anchor="home">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="front-banner">
          <div class="front-banner__inner init"
               id="frontBanner"
               style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('image'),'full') ?>')">
            <?php echo wp_get_attachment_image(get_field('background'),'full') ?>
            <a href="#register">
              <?php get_template_part('components/mouse') ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" data-anchor="register">
  <div id="register" class="d-lg-none"></div>
  <div class="container h-100">
    <div class="front-section">
      <div></div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
          <div id="frontContent">
            <div class="front-content">
              <?php the_field('content'); ?>
            </div>
            <div class="contact-form">
              <?php echo do_shortcode(get_field('form_code')) ?>
            </div>
          </div>
          <div class="d-none" id="successContent">
            <div class="front-content">
              <?php the_field('success_content'); ?>
            </div>
            <div class="front-social">
              <h4 class="text-center"><?php the_field('social_heading'); ?></h4>
              <div class="front-social__buttons">
                 <?php if (have_rows('social')):
                     while (have_rows('social')) : the_row();
                        $link = get_sub_field('link'); ?>
                       <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>">
                         <?php echo $link['title'] ?>
                         <?php echo wp_get_attachment_image(get_sub_field('icon'),'full') ?>
                       </a>
                     <?php endwhile;
                  endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part('components/footer') ?>
    </div>
  </div>
</div>
