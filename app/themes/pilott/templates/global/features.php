<?php
/**
 * Front Page: Features
 */

$title = 'Give your engines an extra boost';
$subtitle = 'Pilott anticipates your needs and provides 24/7/365 support, so you can focus on what really matters: growing your business and delighting your users.';

if (is_front_page()) {
  $title = 'Houston, we have features!';
  $subtitle = 'Our goal is to make the user experience as streamlined and worry-free as possible. That’s why our highly scalable hosting solutions were designed with you in mind.';
}
?>

<section class="_gray-light section-padding">
  <div class="container">
    <div class="features_wrap">
      <header class="features__lead section-lead row">
        <h1 class="lg-sans black features__title"><?= $title ?></h1>
        <div class="sm-sans features__subtitle">
          <p><?= $subtitle ?></p>
        </div>
      </header>
      <section class="features row">
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/managed-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Backed by AWS
          </h2>
          <div class="features__title xs-sans">
            Don’t install or migrate anything. <br />We’ll handle it!
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/backed-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Backed by AWS
          </h2>
          <div class="features__title xs-sans">
            Our sites are flexible, fast, safe—and backed by Amazon Web Services (AWS).
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/scalability-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Unlimited Scalability
          </h2>
          <div class="features__title xs-sans">
            Our capacity flexes to meet the high-traffic demands of large-scale websites.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/fast-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Lightning Fast
          </h2>
          <div class="features__title xs-sans">
            Our cloud-based technology is<br>fast and durable.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/auto-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Auto-Scaling on Demand
          </h2>
          <div class="features__title xs-sans">
            Maintain availability and<br>eliminate downtime.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/cdn-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Globally Available, Locally Served
          </h2>
          <div class="features__title xs-sans">
            Connecting with customers has never<br>been faster or easier.
          </div>
        </article>
      </section>
    </div>
  </div>
</section>
