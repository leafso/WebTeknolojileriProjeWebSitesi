$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        stagePadding: 50,
        autoplay:true,
        autoplayTimeout:800,
        autoplayHoverPause:true,
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            800:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
  });

  