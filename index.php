<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

get_header();
?>

<div class="row">
  <div class="col-sm">
    <?php
      if (have_posts()):
        while(have_posts()):
          the_post();

          if (is_singular()) {
            the_title('<h2>', '</h2>');
          } else {
            the_title('<h2><a href="'.esc_url(get_permalink()).'">', '</a></h2>');
          }
    ?>
            <div>
              <?php the_date(); ?> <?php the_time() ?> <?php the_category() ?>
            </div>
    <?php
          the_content();

          if ((is_single() || is_page()) && (comments_open() || get_comments_number())) {
            comments_template();
          }
    ?>
      <!-- <p>~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*</p> -->
          <!-- <p>~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*</p> -->
          <hr />
    <?php
        endwhile;
      endif;
    ?>
  </div>
  <div class="col-sm">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
