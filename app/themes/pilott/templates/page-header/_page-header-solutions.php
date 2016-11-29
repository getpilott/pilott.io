<?php
/**
 * Page Header: Solutions (Managed, WooCommerce, CoPilott)
 */

 $title         = get_the_title();
 $custom_title  = get_field('custom_title');
 $subtitle      = get_field('page_subtitle');

 if ($custom_title) {
   $title = $custom_title;
 }
?>

<section class="page-header-solutions _white bkg-cover">
  <article class="container">
    <div class="page-header-solutions__content">
      <h1 class="page-header-solutions__title white"><?= $title ?></h1>
      <?php if ($subtitle): ?>
        <h3 class="xs-sans"><?= $subtitle ?></h3>
      <?php endif; ?>
    </div>
    <div class="page-header-solutions__wrap">
      <div class="page-header-solutions__features white">
        <h3 class="solutions__title sm-sans">Tailor made for...</h3>
        <div>
          <ul>
            <li>Enterprise Use</li>
            <li>High-Performance</li>
            <li>Unexpected traffic surges</li>
            <li>High fault-tolerance systems</li>
          </ul>
        </div>
      </div>
      <div class="page-header-solutions__link white">
        <h3 class="solutions__title sm-sans">Designed with you in mind.</h3>
        <div>
          <p>Our server architecture has optimal scaling capabilities and high redundancy for enterprise sites that cannot fail.</p>
        </div>
        <a class="btn-outline--green" href="#">Learn More</a>
      </div>
    </div>
    <div class="page-header-solutions__icon">
      <img class="img-r" width="170" height="auto" src="<?= get_template_directory_uri();?>/dist/images/pilott-logo--green-two-stars.svg" alt="">
    </div>
  </article>
</section>
