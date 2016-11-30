<?php
/**
 * Page Header: Single
 */

 $id    = get_the_ID();
 $title = get_the_title();
?>

<section class="page-header-single _white bkg-cover">
  <article class="container">
    <div class="page-header-single__content">
      <div class="page-header-single__meta xs-sans sm-caps">
        <time datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
        <a class="xs-sans sm-caps" href="#">#Blog</a>
      </div>
      <h1 class="page-header-single__title xl-sans black"><?= $title ?></h1>
    </div>
  </article>
</section>
