<?php
/**
 * Global: Sign up
 */
?>

<?php if (is_front_page()): ?>
  <section class="_white section-padding">
    <div class="container">
      <article class="global-signup">
        <div class="global-signup__title">
          <h1 class="md-sans black"><span>Are you ready for the next big thing?</span><br>Get started with Shifter today!</h1>
        </div>
        <a href="#" class="btn-outline--purple">Sign up</a>
      </article>
    </div>
  </section>
<?php else: ?>
  <section class="_gradient section-padding">
    <div class="container">
      <article class="global-signup">
        <div class="global-signup__title">
          <h1 class="md-sans white"><span>Are you ready for the next big thing?</span><br>Get started with Shifter today!</h1>
        </div>
        <a href="#" class="btn-outline--white">Sign up</a>
      </article>
    </div>
  </section>
<?php endif; ?>
