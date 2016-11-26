<?php
  use Apollo\Extend\Util;
?>

<header class="global-header" role="banner">
  <div class="container-flex">
    <div class="logo">
      <a href="<?= esc_url(home_url('/')); ?>">
        <img width="130" height="auto" src="<?= get_template_directory_uri();?>/dist/images/shifter-logo--white.svg" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <nav class="global-nav" role="navigation">
      <div class="primary-nav">
        <?= Util\Listless_WP_Nav('primary_navigation'); ?>
      </div>
      <div class="btn-group signup-links">
        <a class="btn-outline--white" href="#">Login</a>
        <a class="btn-outline--white" href="#">Sign up</a>
      </div>
    </nav>
    <a class="global-nav-toggle" href="#">&#9776;</a>
  </div>
</header>
<div style="height:100px"></div>
