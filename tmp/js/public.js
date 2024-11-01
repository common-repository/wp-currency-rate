(function ($) {
	"use strict";
	$(function () {
		// Place your public-facing JavaScript here

		var windowHeight = $(window).height();
		
		 var header =  $("#jj_sl_navigation").height();
		 
		   var topheight = (windowHeight-header)/2;
		 

		  $('ul#jj_sl_navigation').css({ 'top':+topheight+'px'});

	});
}(jQuery));