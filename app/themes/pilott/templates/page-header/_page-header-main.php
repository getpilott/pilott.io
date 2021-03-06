<?php
/**
 * Page Header: Main
 */

 $title         = get_the_title();
 $custom_title  = get_field('custom_title');
 $subtitle      = get_field('page_subtitle');

 if ($custom_title) {
   $title = $custom_title;
 }
?>

<section class="page-header _white bkg-cover">
  <article class="container">
    <div class="page-header__content">
      <h1 class="page-header__title black"><?= $title ?></h1>
      <?php if ($subtitle): ?>
        <h3 class="xs-sans"><?= $subtitle ?></h3>
      <?php endif; ?>
    </div>
  </article>
</section>
