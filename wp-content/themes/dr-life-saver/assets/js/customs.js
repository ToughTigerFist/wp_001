jQuery(window).on( 'scroll load resize', function() {

	setTimeout(function(){ 

		var scrollTop = jQuery('header > nav.navbar').outerHeight();	
  	
  		jQuery('ul.slicknav_nav').css({
	  		'top' :  scrollTop + 'px'
	  	});

  		var childHeight = jQuery('a.slicknav_btn').outerHeight();
	  	jQuery('.navbar.sticky .slicknav_btn').css({
	  		'top': ( ( scrollTop - childHeight ) / 2 ) + 'px'
	  	});

	  	if( jQuery(window).scrollTop() < 1 ) {
	  		jQuery('.navbar .slicknav_btn').removeAttr('style');
	  	}

  	}, 100);
  	
});