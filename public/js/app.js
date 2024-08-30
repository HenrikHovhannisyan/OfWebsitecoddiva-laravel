const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

        const currentlyActiveAccordionItemHeader = document.querySelector(
            ".accordion-item-header.active"
        );
        if (
            currentlyActiveAccordionItemHeader &&
            currentlyActiveAccordionItemHeader !== accordionItemHeader
        ) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});

$('#owl-carousel-info').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: [
        '<button type="button" class="btn m-2"><i class="fa-solid fa-chevron-left text-white"></i></button>',
        '<button type="button" class="btn m-2"><i class="fa-solid fa-chevron-right text-white"></i></button>'
    ],
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        }
    }
});

$('#owl-carousel-testimonials').owlCarousel({
    loop: true,
    nav: true,
    navText: [
        '<button type="button" class="btn btn-light m-2 rounded-circle"><i class="fa-solid fa-chevron-left text-dark"></i></button>',
        '<button type="button" class="btn btn-light m-2 rounded-circle"><i class="fa-solid fa-chevron-right text-dark"></i></button>'
    ],
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 2,
        }
    }
});
$('#owl-carousel-banner').owlCarousel({
    loop: true,
    nav: true,
    navText: [
        '<button type="button" class="btn btn-light m-2 rounded-circle"><i class="fa-solid fa-chevron-left text-dark"></i></button>',
        '<button type="button" class="btn btn-light m-2 rounded-circle"><i class="fa-solid fa-chevron-right text-dark"></i></button>'
    ],
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        }
    }
});

$('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function (event) {
    $(this).find('.owl-nav').removeClass('disabled');
});

$(document).ready(function(){
    let firstParagraph = $('.blog_item_container_text').find('p:first');
    let truncatedParagraph = firstParagraph.clone();
    truncatedParagraph.nextAll().remove();
    truncatedParagraph.addClass('truncate');
    $('.blog_item_container_text').empty().append(truncatedParagraph);
});

AOS.init();

$("#bars").click(function(){
    $("#menu").toggleClass("d-none");
    $("#content").toggleClass("w-100");
});
