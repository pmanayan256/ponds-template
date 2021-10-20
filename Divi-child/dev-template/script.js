document.querySelectorAll(".file-upload-content").length > 0 &&
    document.querySelectorAll(".file-upload-content")[0].addEventListener("click", function () {
        this.querySelectorAll("input[type=file]")[0].click();
    }),
    document.querySelectorAll(".mobile-show.hamburger").length > 0 &&
        document.querySelectorAll(".mobile-show.hamburger")[0].addEventListener("click", function () {
            var e = document.querySelectorAll(".nav-links-container-mobile")[0];
            e.parentNode.classList.contains("open") ? e.parentNode.classList.remove("open") : e.parentNode.classList.add("open");
        }),
    document.querySelectorAll(".modal-button").length > 0 &&
        document.querySelectorAll(".modal-button")[0].addEventListener("click", function () {
            document.body.classList.remove("modal-open"), (document.querySelectorAll("input#consent")[0].checked = !0);
        }),
    document.querySelectorAll(".modal-opener-services").length > 0 &&
        document.querySelectorAll(".modal-opener-services")[0].addEventListener("click", function () {
            document.body.classList.add("modal-open");
        }),
    document.querySelectorAll(".modal-close-bg").length > 0 &&
        document.querySelectorAll(".modal-close-bg")[0].addEventListener("click", function () {
            document.body.classList.remove("modal-open");
        }),

jQuery(function (e) { 

    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.template-accordion-title');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.template-accordion-description').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);          
    }); 


        // Select all links with hashes
    /*$('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });*/


    var $jq = jQuery.noConflict();
    $jq(document).ready(function() { 
    
      /*Start Gallery Slick Slider Display 1*/
       $('.slick-item-for').slick({
          slidesToShow: 1,
           slidesToScroll: 1,
           arrows: false,
           fade: true,
            asNavFor: '.slick-item-nav'
        });
       $(".slick-item-nav").slick({
           slidesToShow: 5,
           slidesToScroll: 1,
           asNavFor: '.slick-item-for',
           dots: false,
           focusOnSelect: true, 
           responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
              }
            }
            ]
        });

       
       /*Start Gallery Slick Slider Display 2-4 images*/
       $('.slick-item-for-v2').slick({
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 2,
          focusOnSelect: true, 
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });

       /*Start Gallery Slick Slider Display 2-4 images*/
       $('.slick-item-for-v3').slick({          
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            focusOnSelect: true, 
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: true,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: true,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
        });


       /*End Gallery Slick Slider*/

       /*Start ATF Gallery Slider*/
       $('.atf-slider-content-bg').slick({
            dots: false,
            prevArrow: true,
            nextArrow: true,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnHover: false
        });
       /*End ATF Slick Slider*/
    });

});


/*Image Hover*/
const imgToHover = document.querySelectorAll(".move-mouse-add");
function showImgContent(e) {
    document.removeEventListener('mousemove', showImgContent);

    // e = Mouse click event.
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left; //x position within the element.
    var y = e.clientY - rect.top;  //y position within the element.


    this.querySelectorAll("span.img-content-hover")[0].style.transform = `translate3d(${x}px, ${y}px, 0)`;
};

for(i = 0; i < imgToHover.length; i++){
imgToHover[i].addEventListener('mousemove', showImgContent);
}
/*End of Image Hover*/


