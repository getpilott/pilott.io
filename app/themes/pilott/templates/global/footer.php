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
          <img width="130" height="auto" src="<?= get_template_directory_uri();?>/dist/images/shifter-logo--white.svg" alt="<?php bloginfo('name'); ?>">
        </a>
      </figure>

      <nav class="global-footer__links primary">
      <?php
      $pages = array(
        'include' => array(
          21, 24, 26, 28
        ),
        'sort_column' => 'menu_order'
      );

      $pages = get_pages($pages);

      foreach ($pages as $page) {
        $id     = $page->id;
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
          30, 32
        ),
        'sort_column' => 'menu_order'
      );

      $pages = get_pages($pages);

      foreach ($pages as $page) {
        $id     = $page->id;
        $title  = $page->post_title;
        $link   = get_permalink($id);
        ?>
        <a class="xs-sans sm-caps gray" href="<?= $link ?>"><?= $title ?></a>
      <?php } ?>
      </nav>
      <section class="global-footer__contact">
        <article class="contact-item">
          <h4 class="xs-sans sm-caps white">Email Support</h2>
          <a class="xs-sans sm-caps purple" href="mailto:support@getshifter.io">support@getshifter.io</a>
        </article>
        <article class="contact-item">
          <h4 class="xs-sans sm-caps white"> Say Hi</h4>
          <a class="xs-sans sm-caps purple" href="mailto:hello@getshifter.io">hello@getshifter.io</a>
        </article>
      </section>
      <section class="global-footer__signup btn-group--stacked">
        <a href="#" class="btn-outline--white">Login</a>
        <a href="#" class="btn-outline--white">Signup</a>
      </section>
    </article>
  </section>
  <section class="bottom _black">
    <article class="container-flex">
      <h6 class="global-footer__copyright xs-sans sm-caps">©2016 Shifter | A <span class="purple">DigitalCube</span> Company</h6>
      <section class="global-footer__social">
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/github-icon.svg" alt="">
        </a>
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/twitter-icon.svg" alt="">
        </a>
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/facebook-icon.svg" alt="">
        </a>
        <a href="<?= esc_url(home_url('/')); ?>">
          <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/instagram-icon.svg" alt="">
        </a>
      </section>
    </article>
  </section>
</footer>
