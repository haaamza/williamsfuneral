// JavaScript Document
 $( document ).ready(function() {
    "use strict";
var owl = $('.post-slider');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
});
$('.play').on('click',function(){
    owl.trigger('autoplay.play.owl',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('autoplay.stop.owl')
})
});