<?php
/**
 * Page Header: Main
 */

 $page_for_posts = get_option( 'page_for_posts' );

 $title         = get_the_title($page_for_posts);
 $custom_title  = get_field('custom_title', $page_for_posts);
 $subtitle      = get_field('page_subtitle', $page_for_posts);

 if ($custom_title) {
   $title = $custom_title;
 }
?>

<section class="page-header _white bkg-cover">
  <article class="container">
    <div class="page-header__content">
      <h1 class="page-header__title xl-sans black"><?= $title ?></h1>
      <?php if ($subtitle): ?>
        <h3 class="xs-sans"><?= $subtitle ?></h3>
      <?php endif; ?>
    </div>
  </article>
</section>
