<?php
/**
 * Index
 */

use Apollo\Modules;
?>

<section class="blog _gradient">
  <div class="container">
    <div class="blog__archive">
      <div class="blog__categories">
        <a href="#">Blog</a>
        <a href="#">Events</a>
        <a href="#">Release Notes</a>
      </div>
      <?php
      if ( !have_posts() ) : ?>
        <div class="alert alert-warning">
          No posts exist.
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php Modules\post_module(); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
    </div>
  </div>
</section>
