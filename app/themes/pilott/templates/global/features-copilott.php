<?php
/**
 * Front Page: Features CoPilott
 */

$title = 'Expert Support Services';
$subtitle = 'CoPilott offers a customized suite of support services designed to launch your site into the stratosphere. Whether you host with us or host your own site, our AWS-certified professional engineers are on standby and ready to help.';

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
            Expert Support
          </h2>
          <div class="features__title xs-sans">
            Our WordPress consultants support your WordPress operation and maintenance, so you can focus on your business and page content.Don’t install or migrate anything. <br />We’ll handle it!
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/backed-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Code Review
          </h2>
          <div class="features__title xs-sans">
            Let our experienced staff check your code for security issues and vulnerabilities—so you can use your WordPress site more safely.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/scalability-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Performance Monitoring
          </h2>
          <div class="features__title xs-sans">
            Our system administrator monitors servers regularly and analyses what causes low performance, ensuring optimal performance.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/fast-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Upgrades and Updates
          </h2>
          <div class="features__title xs-sans">
            We perform regular maintenance, operation verification, and core WordPress and plugin updates to keep you up-to-date.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/auto-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Security Auditing
          </h2>
          <div class="features__title xs-sans">
            We automatically back up databases, servers, and file storage, so you can restore a failed or attacked site quickly and easily without worrying about attacks to other accounts.
          </div>
        </article>
        <article class="features__item">
          <img class="features__icon" width="auto" height="70" src="<?= get_template_directory_uri();?>/dist/images/cdn-icon.svg" alt="">
          <h2 class="features__title black-light sm-sans">
            Project Management Tools
          </h2>
          <div class="features__title xs-sans">
            We are supported via Backlog, the best and easiest project management tool on the web. Members can manage their projects anytime, anywhere without losing communication with other teammates.
          </div>
        </article>
      </section>
    </div>
  </div>
</section>
