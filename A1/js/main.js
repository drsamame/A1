$(document).ready(function () {
	linkInterno = $('.navbar-nav a[href^="#"],#irContacto');
	linkInterno.on('click', function (e) {
		e.preventDefault();
		var href = $(this).attr('href');
		$('html, body').animate({scrollTop: $(href).offset().top - 78}, 'slow');
	});

	var fixmeTop = $('#menu').offset().top;
	$('.navbar-brand').hide();
	$('#menu .navbar-brand').hide();


		$('.navbar-default .navbar-nav > li > a').removeClass('active');


		var currentScroll = $(window).scrollTop();
		if (currentScroll >= fixmeTop) {
			$('#menu').attr('class', 'navbar navbar-default navbar-fixed-top');

			$('#menu').addClass('in_scrolll');
			$('.navbar-brand').show();

		} else {
			$('.navbar-brand').hide();
			$('#menu').attr('class', 'navbar navbar-default');
			$('#menu').removeClass('in_scrolll');
		}





		var liMenu = $('.navbar-nav li');
		var nServicio = $('#servicios').offset().top-78;
		var nProyectos = $('#proyectos').offset().top-78;
		var nClientes = $('#clientes').offset().top-78;
		var nEquipo = $('#equipo').offset().top-78;
		var nContactanos = $('#contactanos').offset().top-78;
		var nMenu = $('.navbar-nav a[href^="#"]').offset().top;



		if(0 <= nMenu && nMenu < nServicio){
			
			$('#nav-home').addClass('active');
		}
		if(nServicio <= nMenu && nMenu < nProyectos){
			
			$('#item-servicios').addClass('active');
		}
		if(nProyectos <= nMenu && nMenu < nClientes){
			
			$('#item-proyectos').addClass('active');
		}
		if(nClientes <= nMenu && nMenu < nEquipo){
			
			$('#item-clientes').addClass('active');
		}
		if(nEquipo <= nMenu && nMenu < nContactanos){
			
			$('#item-equipo').addClass('active');
		}
		if(nContactanos <= nMenu ){
			
			$('#item-contactanos').addClass('active');
		}


	
	$("#form-contactanos").on("submit", function (event) {
		event.preventDefault();
		$('#modal').modal('show');
		$('#modal .modal-content').html('Enviando mensaje.....');
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function (data) {
				$('#modal .modal-content').html('Mensaje enviado <br> Gracias por escribirnos en las próximas horas nos pondremos en contacto con usted');
				setTimeout(function(){
					$('#modal').modal('hide');
			    },2000);
			}, error: function (request, error) {
				$('#modal .modal-content').html('Mensaje enviado. <br> Gracias por escribirnos en las próximas horas nos pondremos en contacto con usted');
				setTimeout(function(){
					$('#modal').modal('hide');
			    },2000);
			},
		});
	});

	var offset = 250;
	var duration = 300;
	$(window).scroll(function () {
		if ($(this).scrollTop() > offset) {
			$('.back-to-top').fadeIn(duration);
		} else {

			$('.back-to-top').fadeOut(duration);
		}
	});
	$('.back-to-top').click(function (event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, duration);
		return false;
	})



//Carousel Multiple

// Instantiate the Bootstrap carousel
$(document).ready(function(){

  $('.owl-carousel').owlCarousel({
  	items:4,
  	loop:false,
  	dots:true,
  	dotData:true,
  	margin:0,
  	responsive : {
        0:{
            items:1
        },
	    480 : {
	            items:2
	    },	
	    // breakpoint from 768 up
	    768 : {
	            items:4
	    }

	}
  });

});


//Hover Dir
;( function( $, window, undefined ) {
	
	'use strict';

	$.HoverDir = function( options, element ) {
		
		this.$el = $( element );
		this._init( options );

	};

	// the options
	$.HoverDir.defaults = {
		speed : 300,
		easing : 'ease',
		hoverDelay : 0,
		inverse : false
	};

	$.HoverDir.prototype = {

		_init : function( options ) {
			
			// options
			this.options = $.extend( true, {}, $.HoverDir.defaults, options );
			// transition properties
			this.transitionProp = 'all ' + this.options.speed + 'ms ' + this.options.easing;
			// support for CSS transitions
			this.support = Modernizr.csstransitions;
			// load the events
			this._loadEvents();

		},
		_loadEvents : function() {

			var self = this;
			
			this.$el.on( 'mouseenter.hoverdir, mouseleave.hoverdir', function( event ) {
				
				var $el = $( this ),
					$hoverElem = $el.find( 'div' ),
					direction = self._getDir( $el, { x : event.pageX, y : event.pageY } ),
					styleCSS = self._getStyle( direction );
				
				if( event.type === 'mouseenter' ) {
					
					$hoverElem.hide().css( styleCSS.from );
					clearTimeout( self.tmhover );

					self.tmhover = setTimeout( function() {
						
						$hoverElem.show( 0, function() {
							
							var $el = $( this );
							if( self.support ) {
								$el.css( 'transition', self.transitionProp );
							}
							self._applyAnimation( $el, styleCSS.to, self.options.speed );

						} );
						
					
					}, self.options.hoverDelay );
					
				}
				else {
				
					if( self.support ) {
						$hoverElem.css( 'transition', self.transitionProp );
					}
					clearTimeout( self.tmhover );
					self._applyAnimation( $hoverElem, styleCSS.from, self.options.speed );
					
				}
					
			} );

		},
		// credits : http://stackoverflow.com/a/3647634
		_getDir : function( $el, coordinates ) {
			
			// the width and height of the current div
			var w = $el.width(),
				h = $el.height(),

				// calculate the x and y to get an angle to the center of the div from that x and y.
				// gets the x value relative to the center of the DIV and "normalize" it
				x = ( coordinates.x - $el.offset().left - ( w/2 )) * ( w > h ? ( h/w ) : 1 ),
				y = ( coordinates.y - $el.offset().top  - ( h/2 )) * ( h > w ? ( w/h ) : 1 ),
			
				// the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);
				// first calculate the angle of the point,
				// add 180 deg to get rid of the negative values
				// divide by 90 to get the quadrant
				// add 3 and do a modulo by 4  to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
				direction = Math.round( ( ( ( Math.atan2(y, x) * (180 / Math.PI) ) + 180 ) / 90 ) + 3 ) % 4;
			
			return direction;
			
		},
		_getStyle : function( direction ) {
			
			var fromStyle, toStyle,
				slideFromTop = { left : '0px', top : '-100%' },
				slideFromBottom = { left : '0px', top : '100%' },
				slideFromLeft = { left : '-100%', top : '0px' },
				slideFromRight = { left : '100%', top : '0px' },
				slideTop = { top : '0px' },
				slideLeft = { left : '0px' };
			
			switch( direction ) {
				case 0:
					// from top
					fromStyle = !this.options.inverse ? slideFromTop : slideFromBottom;
					toStyle = slideTop;
					break;
				case 1:
					// from right
					fromStyle = !this.options.inverse ? slideFromRight : slideFromLeft;
					toStyle = slideLeft;
					break;
				case 2:
					// from bottom
					fromStyle = !this.options.inverse ? slideFromBottom : slideFromTop;
					toStyle = slideTop;
					break;
				case 3:
					// from left
					fromStyle = !this.options.inverse ? slideFromLeft : slideFromRight;
					toStyle = slideLeft;
					break;
			};
			
			return { from : fromStyle, to : toStyle };
					
		},
		// apply a transition or fallback to jquery animate based on Modernizr.csstransitions support
		_applyAnimation : function( el, styleCSS, speed ) {

			$.fn.applyStyle = this.support ? $.fn.css : $.fn.animate;
			el.stop().applyStyle( styleCSS, $.extend( true, [], { duration : speed + 'ms' } ) );

		},

	};
	
	var logError = function( message ) {

		if ( window.console ) {

			window.console.error( message );
		
		}

	};
	
	$.fn.hoverdir = function( options ) {

		var instance = $.data( this, 'hoverdir' );
		
		if ( typeof options === 'string' ) {
			
			var args = Array.prototype.slice.call( arguments, 1 );
			
			this.each(function() {
			
				if ( !instance ) {

					logError( "cannot call methods on hoverdir prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for hoverdir instance" );
					return;
				
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
				
				if ( instance ) {

					instance._init();
				
				}
				else {

					instance = $.data( this, 'hoverdir', new $.HoverDir( options, this ) );
				
				}

			});
		
		}
		
		return instance;
		
	};
	
} )( jQuery, window );

//Init Hover Dir
$(function() {

	$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

});

//SERVICES

  $('.content-service-items ul li').click(function () {



	$('.content-service-description div.'+$this).find('.title-service').addClass('animated');
	$('.content-service-description div.'+$this).find('.content-service').addClass('animated');
	$('.content-service-description div.'+$this).find('.image-service').addClass('animated');
		

    $('.content-service-description .description').hide();


    /*Añadiendo Active*/
    $('.content-service-items ul li').removeClass('selected');
    $($(this)).addClass('selected');
    var $this = $(this).attr('data-selected');
    




    $('.content-service-description .description.'+$this).fadeIn('300', function() {
		
		$('.content-service-description div.'+$this).find('.title-service').addClass('animated');
		$('.content-service-description div.'+$this).find('.content-service').addClass('animated');
		$('.content-service-description div.'+$this).find('.image-service').addClass('animated');
        
        $('.content-service-description div.'+$this).addClass('active');



    });


});

//Animated






});

wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();