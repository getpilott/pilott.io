/**
 * Pricing Calc
 */

module.exports = function() {

  // RangeSlider
  require('./../../../node_modules/rangeslider.js/dist/rangeslider.js');

  // Add Value to Button
  function buttonValues() {
    var $element = $('input[type="range"]');
    var $handle;

    $element.rangeslider({
      polyfill: false,
      onInit: function() {
        $handle = $('.rangeslider__handle', this.$range);
        updateHandle($handle[0], this.value);
      }
    })
    .on('input', function() {
      updateHandle($handle[0], this.value);
    });

    function updateHandle(el, val) {
      el.textContent = val + 'GB';
    }
  }

  // Combine Range Calc Price
  function calcPrice() {
    $(function() {
      const sliders = document.querySelectorAll('input[type=range]');
      const result = document.getElementById('pricing-result');
      const values = getValues(sliders);

      $(sliders)
        .rangeslider({
          polyfill: false,
        })
        .on('change', function() {
          const values = getValues(sliders);
          updateResult(result, values);
        });

      // initially set result
      updateResult(result, values);
    });

    function getValues(elements) {
      return Array.from(elements).map(el => el.value);
    }

    function updateResult(el, values) {
      el.textContent = values.reduce((a,b) => a + parseInt(b), 10);
    }
  }

  calcPrice();
  buttonValues();

};
