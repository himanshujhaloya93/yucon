/* Source and licensing information for the line(s) below can be found at http://yucon.local/themes/custom/yucon/js/slider.js. */
/**
 * @file
 * yucon behaviors.
 */
(function ($, Drupal, drupalSettings) {
  "use strict";
  Drupal.behaviors.yuconSlider = {
    attach(context, settings) {
      $(document).ready(function() {

        $("#paragraph-slider .field--name-field-slider-item").on('init', function(event, slick){
          $(this).find('[data-slick-index="'+(slick.currentSlide+1)+'"]').addClass("after-1");
          $(this).find('[data-slick-index="'+(slick.currentSlide+2)+'"]').addClass("after-2");

          $(this).find('[data-slick-index="'+(slick.currentSlide-1)+'"]').addClass("before-1");
          $(this).find('[data-slick-index="'+(slick.currentSlide-2)+'"]').addClass("before-2");
          //$(this).find('[data-slick-index="'+(currentSlide-2)+'"] h4').attr('aria-hidden', 'true');
        });

        $("#paragraph-slider .field--name-field-slider-item").not('.slick-initialized').slick({
          arrows: false,
          autoplay: true,
          loop: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '15%',
          responsive: [
            {
              breakpoint: 850,
              settings: {
                slidesToShow: 1,
                centerPadding: '150px',
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                centerPadding: '80px',
              }
            }
          ]
        });

        $("#paragraph-slider .field--name-field-slider-item").on('afterChange', function(event, slick, currentSlide, nextSlide){
          $(this).find('.slick-slide').removeClass("after-1");
          $(this).find('.slick-slide').removeClass("before-1");
          $(this).find('.slick-slide').removeClass("after-2");
          $(this).find('.slick-slide').removeClass("before-2");
          
          $(this).find('[data-slick-index="'+(currentSlide+1)+'"]').addClass("after-1");
          $(this).find('[data-slick-index="'+(currentSlide+2)+'"]').addClass("after-2");

          $(this).find('[data-slick-index="'+(currentSlide-1)+'"]').addClass("before-1");
          $(this).find('[data-slick-index="'+(currentSlide-2)+'"]').addClass("before-2");
    	  //$(this).find('[data-slick-index="'+(currentSlide-2)+'"] h4').attr('aria-hidden', 'true');
        });

      });
    },
  };
})(jQuery, Drupal, drupalSettings);

/* Source and licensing information for the above line(s) can be found at http://yucon.local/themes/custom/yucon/js/slider.js. */