/**
 * Module for js that fires on all pages.
 */

module.exports = function() {

  console.log('Home Animation.');

  require('gsap/src/uncompressed/jquery.gsap.js');
  require('gsap/src/uncompressed/TimelineLite.js');
  require('gsap/src/uncompressed/TweenMax.js');
  require('gsap/src/uncompressed/plugins/BezierPlugin.js');
  require('scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js');
  // require('scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js');
  var ScrollMagic = require('scrollmagic');


  var $board   = $('#animation-board');
  var $trigger = $('#trigger');
  // $trigger.css({
  //   top: ( $(window).height() / 2 )
  // })


  // SVG Items
  var semi      = document.getElementById('logo-semi-circle-start');
  var square    = document.getElementById('logo-square-start');
  var triangle  = document.getElementById('logo-triangle-start');
  var circle    = document.getElementById('logo-circle-start');
  var rectangle = document.getElementById('logo-rectangle-start');
  var startText = document.getElementById('start-text');
  var startLearn = document.getElementById('start-text-learn');
  var endText   = document.getElementById('end-text');

  // init controller
  var controller = new ScrollMagic.Controller();

  // Semi Circle Path
  var semiPath = {
    curviness: 1.2,
    type: "soft",
    // autoRotate:["x","y","rotation",346.5,false],
    values: [
      {x: -10,  y: 320, rotation: 0},
      {x: -690,  y: 250, rotation: 132}
    ]
  };

  // Semi Circle Path
  var squarePath = {
    curviness: 1.5,
    // type: "soft",
    autoRotate: false,
    values: [
      {x: -815,  y: -600, rotation: 45},
      {x: -715,  y: -457, rotation: 90}
    ]
  };

  // Semi Circle Path
  var circlePath = {
    curviness: 1,
    // type: "soft",
    autoRotate: false,
    values: [
      {x: -140,  y: -154},
      {x: 36,  y: -85}
    ]
  };

  // Semi Circle Path
  var rectPath = {
    curviness: 0.5,
    // type: "soft",
    autoRotate: false,
    values: [
      // {x: -140,  y: -154},
      {x: 390,  y: 132, rotation: 90},
      {x: 479,  y: -69, rotation: 180}
    ]
  };

  // Semi Circle Path
  var triPath = {
    curviness: 0.5,
    // type: "soft",
    autoRotate: false,
    values: [
      {x: -300,  y: -45, rotation: 60},
      {x: -592,  y: -90, rotation: 180}
    ]
  };


  var tween = new TimelineLite();
  tween.to(semi, 1, { css:{bezier:semiPath}, ease:Power1.easeInOut} )
       .to(square, 1, { css:{bezier:squarePath}, ease:Power1.easeInOut}, 0 )
       .to(circle, 1, { css:{bezier:circlePath}, ease:Power1.easeInOut}, 0 )
       .to(rectangle, 1, { css:{bezier:rectPath}, ease:Power1.easeInOut}, 0 )
       .to(triangle, 1, { css:{bezier:triPath}, ease:Power1.easeInOut}, 0 )
       .to(endText, .1, { opacity: 1 }, 0.85 )
       .to(startText, 1, { y: -1000 }, 0 )
       .to(startText, .375, { opacity: 0 }, .25 );




  // build scene
  var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 800})
    .setPin("#animation-board")
    .setTween(tween)
    // .addIndicators() // add indicators (requires plugin)
    .addTo(controller);




};
