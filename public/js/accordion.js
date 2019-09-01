// JavaScript Document

		jQuery(function ($) {
		"use strict";
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="fa fa-minus-square-o sign"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="fa fa-plus-square-o sign"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.fa').toggleClass('fa-plus-square-o fa-minus-square-o');
        $(e.target).prev().addClass('active').find('.fa').toggleClass('fa-plus-square-o fa-minus-square-o');
    })
});