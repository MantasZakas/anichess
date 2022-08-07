<div class="section front-banner__outer" data-anchor="home">
  <?php if (get_field('video_webm') || get_field('video_mp4')) { ?>
    <video
      data-ignore
      data-keepplaying
      autoplay
      playsinline
      preload
      muted
      loop
      style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('background'),'square') ?>')"
    >
      <?php if (get_field('video_webm')) { ?>
        <source src="<?php the_field('video_webm') ?>" type="video/webm"/>
      <?php } ?>
      <?php if (get_field('video_mp4')) { ?>
        <source src="<?php the_field('video_mp4') ?>" type="video/mp4"/>
      <?php } ?>
    </video>

    <a href="#register" class="d-none d-md-block mouse mouse--video">
      <?php get_template_part('components/mouse') ?>
    </a>

  <?php } else { ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="front-banner d-none">
            <div class="front-banner__inner init"
                 id="frontBanner"
                 style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('image'),'square') ?>')">
              <?php echo wp_get_attachment_image(get_field('background'),'square') ?>
              <a href="#register" class="d-none d-md-block mouse">
                <?php get_template_part('components/mouse') ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>

<div class="section front-content__wrap" data-anchor="register">
  <div class="container h-100">
    <div class="front-section">
      <div></div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
          <div id="frontContent">
            <div class="front-content wow fadeIn fadeDelay-04">
              <h1>
                <span class="typewriter-wrap typewriter-wrap--1"><b id="typewriter1">A Thrilling Challenge</b></span> Inspired By <span class="typewriter-wrap typewriter-wrap--2"><b id="typewriter2">Super Grandmasters</b></span>
              </h1>
              <?php the_field('content'); ?>
            </div>
            <div class="contact-form wow fadeIn fadeDelay-08">
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
