// JavaScript Document
 $( document ).ready(function() {
    "use strict";
  $('.obituaries-slider').owlCarousel({
    
    loop:true,
    margin:15,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
})
}); 
 
