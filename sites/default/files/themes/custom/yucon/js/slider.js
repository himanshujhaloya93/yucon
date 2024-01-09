/**
 * @file
 * yucon behaviors.
 */
(function ($, Drupal, drupalSettings) {
    'use strict';
        Drupal.behaviors.yucon = {
            attach (context, settings) {
            const wrap = document.getElementById('wrap');
            const fps = new FullPageScroll(wrap);
            const indicator = document.createElement('div');
            indicator.id = 'indicator';
            const slideIndicators = [];
            fps.slides.forEach((slide, index) => {
                const slideIndicator = document.createElement('div');
                slideIndicator.onclick = () => {
                fps.goToSlide(index);
                }
                if (index === fps.currentSlide) {
                slideIndicator.className = "active";
                }
                indicator.appendChild(slideIndicator);
                slideIndicators.push(slideIndicator);
            });
            document.body.appendChild(indicator);
            fps.onslide = () => {
                slideIndicators.forEach((slideIndicator, index) => {
                slideIndicator.className = index === fps.currentSlide ? "active" : "";
                });
            }
        }
    };
  
})(jQuery, Drupal, drupalSettings);








