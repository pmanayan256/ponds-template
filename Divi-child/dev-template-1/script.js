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


jQuery(function($) {
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

    var accordion = new Accordion(jQuery('#accordion'), false);          
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


jQuery(document).ready( function() {
    jQuery('.atf-slider-content-bg').slick({
        autoplay: true,
        autoplaySpeed: 4000 || 3000,
        fade: true,
        cssEase: 'linear',
        speed: 500,
    });
});