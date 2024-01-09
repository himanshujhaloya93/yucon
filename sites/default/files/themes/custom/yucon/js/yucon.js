/**
 * @file
 * yucon behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.yucon = {
    attach (context, settings) {

    const header = document.querySelector('.header');
      window.onscroll = () => {
        if (window.scrollY > 100) {
            header.classList.add('nav-active');
        } else {
            header.classList.remove('nav-active');
        }
      };
    }
  };

} (Drupal));
