<?php
/**
 * Global: Footer
 */
?>

<footer class="global-footer" role="contentinfo">
  <section class="top _black-light">
    <article class="container">
      <figure class="global-footer__logo logo">
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="95" height="auto" src="<?= get_template_directory_uri();?>/dist/images/pilott-type--white.svg" alt="<?php bloginfo('name'); ?>">
        </a>
      </figure>

      <nav class="global-footer__links primary">
      <?php
      $pages = array(
        'include' => array(
          2, 5, 7, 9, 11
        ),
        'sort_column' => 'menu_order'
      );

      $pages = get_pages($pages);

      foreach ($pages as $page) {
        $id     = $page->ID;
        $title  = $page->post_title;
        $link   = get_permalink($id);
        ?>
        <a class="xs-sans sm-caps white" href="<?= $link ?>"><?= $title ?></a>
      <?php } ?>
      </nav>

      <nav class="global-footer__links primary">
      <?php
      $pages = array(
        'include' => array(
          31, 35, 33
        ),
        'sort_column' => 'menu_order'
      );

      $pages = get_pages($pages);

      foreach ($pages as $page) {
        $id     = $page->ID;
        $title  = $page->post_title;
        $link   = get_permalink($id);
        ?>
        <a class="xs-sans sm-caps white" href="<?= $link ?>"><?= $title ?></a>
      <?php } ?>
      </nav>

      <nav class="global-footer__links secondary">
      <?php
      $pages = array(
        'include' => array(
          22, 13
        ),
        'sort_column' => 'menu_order'
      );

      $pages = get_pages($pages);

      foreach ($pages as $page) {
        $id     = $page->ID;
        $title  = $page->post_title;
        $link   = get_permalink($id);
        ?>
        <a class="xs-sans sm-caps gray" href="<?= $link ?>"><?= $title ?></a>
      <?php } ?>
      </nav>
      <section class="global-footer__contact">
        <article class="contact-item">
          <h4 class="xs-sans sm-caps white">Email Support</h2>
          <a class="xs-sans sm-caps purple" href="mailto:support@pilott.io">support@pilott.io</a>
        </article>
        <article class="contact-item">
          <h4 class="xs-sans sm-caps white"> Say Hi</h4>
          <a class="xs-sans sm-caps purple" href="mailto:hello@pilott.io">hello@pilott.io</a>
        </article>
      </section>
      <section class="global-footer__signup btn-group--stacked">
        <a class="btn-outline--white" href="<?= esc_url(home_url('/')); ?>solutions/managed-hosting/#signup">Sign up</a>
      </section>
    </article>
  </section>
  <section class="bottom _black">
    <article class="container-flex">
      <h6 class="global-footer__copyright xs-sans sm-caps">©2016 Pilott | A <span class="green">DigitalCube</span> Company</h6>
      <section class="global-footer__social">
        <a href="https://github.com/getpilott/">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/github-icon.svg" alt="">
        </a>
        <!--
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/twitter-icon.svg" alt="">
        </a>
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/facebook-icon.svg" alt="">
        </a>
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/instagram-icon.svg" alt="">
        </a>
        -->
      </section>
    </article>
  </section>
</footer>
