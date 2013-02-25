// Input Clearing
 
$.fn.cleardefault = function() {
    return this.focus(function() {
        if( this.value == this.defaultValue ) {
            this.value = '';
        }
    }).blur(function() {
        if( !this.value.length ) {
            this.value = this.defaultValue;
        }
    });
};

(function(window, undefined) {
    
	// Just add the .clearit class to a parent tag or input directly 
	$('.clearit, .clearit input, .clearit textarea').cleardefault();

	var screenHeight = $(window).height(),
		header = $('#header').height(),
		screenwidth = $(window).width();
	
	$('.learn-more-hero').click(function() {
		$('body').animate({
			scrollTop: (screenHeight - header)
		}, 800);
		return false;
	});
	
	equalHeight();
	getScreenHeight();
	introMessage();
	overflow();

})(this);

$(window).resize(function() {
	getScreenHeight();
	overflow();
});

$(window).on('scroll', function(e) {
	introMessage();
});

// Equal Heights
function equalHeight() {
	var $sidebar = $('#sidebar');
	var $main = $('#main');
	
	if($sidebar.height() > $main.height()) {
		$main.css({ height: $sidebar.height() + 'px' });	
	}
}

// Hero Screen Height
function getScreenHeight() {
	var screenHeight = $(window).height(),
		screenwidth = $(window).width(),
		tagline = $('.tagline').height(),
		header = $('#header').height(),
		hero = $('#hero').length,
		heroHeight = $('#hero').height();
	
	if(hero === 0) {
		$('#container').css({ paddingTop: header + 'px' });
	} else {
		$('#hero').css({ height: (tagline + (header * 2)) + 'px' });
		$('#container').css({ paddingTop: (tagline + (header * 2)) + 'px' });
		$('#hero.home-hero').css({ height: screenHeight + 'px' });
		$('#container.home-hero').css({ paddingTop: screenHeight + 'px' });
	}

	if(screenwidth <= 767) {
		$('#container').css({ paddingTop: (header / 2) + 'px' });
	}
}

// Hero Message
function introMessage() {
	$container = $('#container').attr('class');
	
	if($container == 'home-hero') {
		$top = 300;
	} else {
		$top = 140;
	}

	// Homepage
	if($(window).scrollTop() >= ($('#content').position().top - $top)) {
		$('#hero').find('.tagline').fadeOut(300);
		$('#header').addClass('solid-black');
	} else {
		$('#hero').find('.tagline').fadeIn(300);
		$('#header').removeClass('solid-black');
	}
}

// Overflow
function overflow() {
	var $overflow = $('#overflow'),
		$container = $('#container'),
		$thisWindow = $(window),
		total = $thisWindow.height() - $container.outerHeight();
	
	if(total > 0) {
		$overflow.css({ height: total + 'px' });
	}
}

// BackStretch
$(function(){
		/* Hide form input values on focus*/ 
		$('input:text').each(function(){
			var txtval = $(this).val();
			$(this).focus(function(){
				if($(this).val() == txtval){
					$(this).val('')
				}
			});
			$(this).blur(function(){
				if($(this).val() == ""){
					$(this).val(txtval);
				}
			});
		});
	});


