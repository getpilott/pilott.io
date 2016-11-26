<?php
/**
 * Get Started: Pricing
 */
?>


<section class="_gradient section-padding">
  <div class="container">
    <article class="pricing">
      <header class="white pricing__lead">
        <h1 class="lg-sans">Flexible, pay as you go pricing</h1>
        <h3 class="xs-sans">With Shifter, you can power an unlimited number of sites for a flexible monthly fee.Starting at $30/month, Shifter will only charge you for the storage and data transfer capabilities you need.</h3>
      </header>
      <div class="plans">
        <div class="plans__signup black-light _white">
          <h2 class="sm-sans">Start from</h2>
          <div class="plans__price xl-sans black-light">
            $30<span class="md-sans">/mo</span>
          </div>
          <a class="btn-outline--purple" href="#">Sign up</a>
        </div>
        <div class="plans__details _white">
          <h3 class="sm-sans">Power unlimited sites<br>starting at $30/month.</h3>
          <h4 class="xs-sans plans__includes-title">This includes:</h4>
          <ul class="xs-sans plans__includes">
            <li>10GB/mo storage</li>
            <li>10GB/mo data transfer</li>
            <li>Unlimited sites</li>
          </ul>
        </div>
      </div>
    </article>
    <article class="pricing-calc">
      <header class="white pricing__lead">
        <h1 class="lg-sans">Flexible, pay as you go pricing</h1>
        <h3 class="xs-sans">With Shifter, you can power an unlimited number of sites for a flexible monthly fee.Starting at $30/month, Shifter will only charge you for the storage and data transfer capabilities you need.</h3>
      </header>
      <div class="calc__wrap _white">
        <div class="calc__title">
          <h2 class="sm-sans black">Pricing Calculator</h2>
        </div>
        <div class="calc">
          <div class="calc__price">
            <div class="plans__price xl-sans black-light">
              $<output id="pricing-result"></output><span class="md-sans">/mo</span>
            </div>
          </div>
          <div class="calc__vars">
            <div class="calc__var">
              <label class="calc__label" for="storageRange">Storage</label>
              <input class="calc__range" id="dataRange" type="range" min="10" step="10" max="100" value="10">
            </div>
            <div class="calc__var">
              <label class="calc__label" for="dataRange">Data Transfer</label>
              <input class="calc__range" id="dataRange" type="range" min="10" step="10" max="100" value="20">
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
