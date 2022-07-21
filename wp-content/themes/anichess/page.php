<div class="container">
  <div class="row">
    <div class="col-12 order-1 col-md-6 col-xl-3 space-fix">
      <div id="pageSummary">
        <div class="d-none d-md-block">
          <?php get_template_part('components/logo') ?>
        </div>
        <div class="page-summary" data-aos="fade-right">
          <a href="<?= esc_url(home_url('/')) ?>"
             class="page-summary__heading">
            <?php the_field('text_courses', 'options'); ?>
          </a>
          <div class="page-summary__text">
            <h1><?php the_title(); ?></h1>
          </div>
          <?php if (have_rows('summary')):
            while (have_rows('summary')) : the_row(); ?>
              <span class="page-summary__heading">
                  <?php the_sub_field('heading'); ?>
                </span>
              <div class="page-summary__text">
                <h4 class="h1"><?php the_sub_field('text'); ?></h4>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
    <div class="col-12 order-2 col-md-5 offset-md-1 order-xl-3 col-xl-2">
      <div class="page-image" data-aos="fade-left" data-aos-delay="200">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'featured') ?>
      </div>
    </div>
    <div class="col-12 order-3 order-xl-2 offset-xl-1 col-xl-5">
      <div class="page-content" data-aos="fade-up" data-aos-delay="400">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
