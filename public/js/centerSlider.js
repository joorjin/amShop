$(function() {

	if ( $('.owl-1').length > 0 ) {
        $('.owl-1').owlCarousel({
            center: false,
            loop: true,
            stagePadding: 0,
            margin: 10,
            smartSpeed: 2000,
            autoplay: false,
            autoplayTimeout:4000 ,
            nav: false,
            dots: false,
            pauseOnHover: false,
            responsive:{
                0:{
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    items: 2
                },
                768:{
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    items: 3
                },
                992:{
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    items: 4
                },
                1200:{
                    margin: 10,
                    stagePadding: 0,
                    nav: false,
                    items: 5
                }
            }
        });            
    }

})

// $(document).ready(function () {
//   let widthImg = $('.owl-carousel .owl-item img').css('width');
//   $('.owl-carousel .owl-item img').css('height', widthImg);
// });