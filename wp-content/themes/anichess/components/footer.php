<footer class="footer">
  <div class="footer-logo">
    <?php echo wp_get_attachment_image(get_field('footer_logo','options')) ?>
  </div>
  <div class="footer-powered">
    <?php the_field('footer_powered','options'); ?>
  </div>
  <div class="footer-links">
     <?php if (have_rows('footer_links','options')):
         while (have_rows('footer_links','options')) : the_row();
            $link = get_sub_field('link')?>
           <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>">
             <?php echo $link['title'] ?>
             <?php echo wp_get_attachment_image(get_sub_field('icon'),'full') ?>
           </a>
         <span></span>
         <?php endwhile;
      endif; ?>
  </div>
</footer>
