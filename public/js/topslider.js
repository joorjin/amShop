$(function() {

	if ( $('.owl-2').length > 0 ) {
        $('.owl-2').owlCarousel({
            rtl:true,
            center: false,
            loop: true,
            stagePadding: 0,
            margin: 10,
            smartSpeed: 1500,
            autoplay: false,
            autoplayTimeout:3000 ,
            slideSpeed: 300,
            paginationSpeed: 500,
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