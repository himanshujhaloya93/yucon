/* Source and licensing information for the line(s) below can be found at http://yucon.local/themes/custom/yucon/js/yucon.js. */
/**
 * @file
 * yucon behaviors.
 */
(function ($, Drupal, drupalSettings) {
  "use strict";

  Drupal.behaviors.yucon = {
    attach(context, settings) {
      const coreInteractions = {
        init() {
          coreInteractions.activeParallax();
          // coreInteractions.sliderCreate();
          coreInteractions.toggleNav();
          coreInteractions.miniSlider();
        },

        activeParallax() {
          //get image insde slides
          const container = document.querySelectorAll(".parallax-wrapper");
          container.forEach((container, index) => {
            const parallaxElement = container.querySelector("#parallax");
            if (parallaxElement) {
              container.addEventListener("mousemove", (e) => {
                const boundingBox = container.getBoundingClientRect();
                const mouseX = event.clientX - boundingBox.left;
                const mouseY = event.clientY - boundingBox.top;
                const offsetX = 0.5 - mouseX / boundingBox.width;
                const offsetY = 0.5 - mouseY / boundingBox.height;
                const transformValue = `translate(${offsetX * 50}px, ${
                  offsetY * 50
                }px) scale(1.2)`;
                parallaxElement.style.transform = transformValue;
              });
            }
          });
        },

        sliderCreate() {
          const wrap = document.getElementById("wrap");
          const fps = new FullPageScroll(wrap);
          const indicator = document.createElement("div");
          coreInteractions.addIndicators(fps, indicator);
          coreInteractions.resetClasses(); 
          fps.slides.forEach((slide, index) => {
            slide.setAttribute("data-slider-index", index);
          });
        },

        addIndicators(fps, indicator) {
          indicator.id = "indicator";
          const slidesList = document.querySelectorAll('.slider');
          const slideIndicators = [];
          fps.slides.forEach((slide, index) => {
            const slideIndicator = document.createElement("div");
            slideIndicator.onclick = () => {
              fps.goToSlide(index);
            };
            if (index === fps.currentSlide) {
              slideIndicator.className = "active";
            }
            indicator.appendChild(slideIndicator);
            slideIndicators.push(slideIndicator);
          });
          document.body.appendChild(indicator);
          fps.onslide = () => {
            slideIndicators.forEach((slideIndicator, index) => {
              if (index === fps.currentSlide) {
                slideIndicator.className = "active";
              } else {
                slideIndicator.className = "";
              }
            });
            slidesList.forEach((item, index) => {
              if (index === fps.currentSlide) {
                // coreInteractions.animateElements(item);
              } else {
                item.className = "slider";
                if(fps.currentSlide == 0){
                  coreInteractions.resetClasses(); 
                }
              }
            });
          };
        },
        animateElements(slide) {
          const summary = slide.querySelector('.slider-content .slider-summary');
          const cta = slide.querySelector('.btns');
          const heading = slide.querySelector('.slider-heading');
          if (summary) {
            summary.className += " animate__animated animate__slideInLeft";
          }
          if(cta) {
            cta.className += " animate__animated animate__slideInUp";
          }
          if(heading) {
            heading.className += " animate__animated animate__slideInLeft";
          }
        },

        resetClasses() {
          const containers = document.querySelectorAll('.slider');
          containers.forEach( (container, i) => {
            const elements = container.querySelectorAll('*');
            elements.forEach( (el, i) => {
              // Get the list of class names
              const classList = el.classList;
              // Loop through each class in the classList
              classList.forEach(className => {
                // Check if the class starts with the substring "animate"
                if (className.startsWith('animate__')) {
                  // Remove the class
                  classList.remove(className);
                }
              });
            });

          })
          
        },

        miniSlider() {
          $('[data-anchor^="#"]').click(function(e) {
            const element = this.getAttribute('data-anchor'); 
            document.getElementById(element).scrollIntoView();
          });
        },

        toggleNav() {
          const mobileNavShow = document.querySelector('.mobile-nav-show');
          const mobileNavHide = document.querySelector('.mobile-nav-hide');
          const navDropdowns = document.querySelectorAll('.mob-navbar .drop > a');

          document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
            el.addEventListener('click', (event) => {
              event.preventDefault();
              document.querySelector('body').classList.toggle('mobile-nav-active');
              mobileNavShow.classList.toggle('d-none');
              mobileNavHide.classList.toggle('d-none');
            })
          });


          navDropdowns.forEach(el => {
            el.addEventListener('click', function(event) {
              if (document.querySelector('.mobile-nav-active')) {
                event.preventDefault();
                this.classList.toggle('active');
                this.nextElementSibling.classList.toggle('drop-active');
        
                let dropDownIndicator = this.querySelector('.drop-indicator');
                dropDownIndicator.classList.toggle('bi-chevron-up');
                dropDownIndicator.classList.toggle('bi-chevron-down');
              }
            })
          });


        }
      
      };
      coreInteractions.init();
    },
  };
})(jQuery, Drupal, drupalSettings);

/* Source and licensing information for the above line(s) can be found at http://yucon.local/themes/custom/yucon/js/yucon.js. */