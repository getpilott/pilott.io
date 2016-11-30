<?php
/**
 * Front Page: Offers
 */
?>

<section class="offers">
  <div class="offers__wrap">
    <article class="offers__item _black-light match-h">
      <img class="offers__icon" width="auto" height="180" src="<?= get_template_directory_uri();?>/dist/images/pilott-logo--green.svg" alt="">
      <h2 class="sm-sans offers__title white">Hosting Solutions</h2>
      <div class="offers__desc white xs-sans">
        <p>High performance hosting solutions for<br>enterprise and WooCommerce sites.</p>
      </div>
      <a href="<?= get_permalink(2) ?>" class="btn-solid--green">Managed Hosting</a>
    </article>
    <article class="offers__item _gray-light match-h">
      <img class="offers__icon" width="auto" height="180" src="<?= get_template_directory_uri();?>/dist/images/pilott-logo--green.svg" alt="">
      <h2 class="sm-sans offers__title">CoPilott Expert Services</h2>
      <div class="offers__desc xs-sans">
        <p>A suite of customized services designed to take<br>your site to the next level.</p>
      </div>
      <a href="<?= get_permalink(33) ?>" class="btn-solid--green">Expert Services</a>
    </article>
  </div>
</section>
