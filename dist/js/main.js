$(".owl-carousel").owlCarousel({
    // center: true,
    margin:20,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 1000,
    loop: true,
    items:3,
    // navContainer: '#seacaNav',
    // dotsContainer: '#seacaDots',
    responsiveClass:true,
    autoHeight:true,
    dotsEach: 1,
    responsive:{
        0:{
            items:1,
            nav: false,
            dots:false,
            stagePadding: 30,
            margin:15
        },
        576:{
            items:1,
            nav: false,
            dots:true,
            stagePadding: 35,
            margin:25
        },
        768:{
            items:3,
            nav: false,
            dots:true,
            stagePadding: -100,
            margin:15
        },
        992:{
            items:3,
            nav: false,
            dots: true,
            stagePadding: -100,
            margin:15
        }
    }
});