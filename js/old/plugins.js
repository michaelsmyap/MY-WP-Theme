(function($){
	
	$(document).ready(function(){
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////						   
		
		// -------------------------------------------------------------------------------------------------------
		// Select Nav - converts your website navigation into a select drop-down menu | 
		// -------------------------------------------------------------------------------------------------------
		
		selectnav('menu', {
			label: 'Menu',
			nested: true,
			indent: '-'
		});
		
		// -------------------------------------------------------------------------------------------------------
		// Imagebox - Responsive Lightbox |
		// -------------------------------------------------------------------------------------------------------
		
		imagebox.build();
		
		// -------------------------------------------------------------------------------------------------------
		// FlexSlider - responsive slider |
		// -------------------------------------------------------------------------------------------------------
		
		$('.flexslider').flexslider({
			animation: "fade",            //String: Select your animation type, "fade" or "slide"
			slideshow: false,              //Boolean: Animate slider automatically
			slideshowSpeed: 7000,         //Integer: Set the speed of the slideshow cycling, in milliseconds
			initDelay: 0,                 //Integer: Set an initialization delay, in milliseconds
			pauseOnAction: true,          //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,          //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			video: false,                 //Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
			// Primary Controls
			controlNav: false,            //Boolean: Create navigation for paging control of each clide?
			directionNav: true,           //Boolean: Create navigation for previous/next navigation? (true/false)
			prevText: "Previous",         //String: Set the text for the "previous" directionNav item
			nextText: "Next"              //String: Set the text for the "next" directionNav item
		});
		
		// -------------------------------------------------------------------------------------------------------
		// Dynamic Carousel - Responsive Carousel |
		// -------------------------------------------------------------------------------------------------------
		
		/*next / prev nav carousel */
		$('#carousel-slider1').carousel({
			slider: '.carousel-slider',
			slide:  '.carousel-slide',
			nextSlide : '.carousel-next',
			prevSlide : '.carousel-prev',
			addPagination: false,
			addNav : false
		});
		
		/* paged navigation carousel */
		$('#carousel-slider2').carousel({
			slider: '.carousel-slider',
			slide: '.carousel-slide',
			addNav: false,
			addPagination: true,
			speed: 300 // ms.
		});
		
		// -------------------------------------------------------------------------------------------------------
		//  Tabify - jQuery tabs plugin
		// -------------------------------------------------------------------------------------------------------
		
		$('#tab-1, #tab-2, #tab-3, #tab-4, #tab-5').tabify();
		
		// -------------------------------------------------------------------------------------------------------
		//  Accordeon - jQuery accordeon plugin
		// -------------------------------------------------------------------------------------------------------
		
		$('#accordion-1, #accordion-2, #accordion-3, #accordion-4, #accordion-5').accordion();

		// -------------------------------------------------------------------------------------------------------
		//  Animate.css
		// -------------------------------------------------------------------------------------------------------
		
		$('.page-boxed .pull-up').addClass('animated fadeInUp');
		$('.page-boxed .section-title').addClass('animated fadeInDown');

		// -------------------------------------------------------------------------------------------------------
		//  gMap
		// -------------------------------------------------------------------------------------------------------
		
		$('#google-map').gMap({
			maptype: 'ROADMAP',
			scrollwheel: false,
			zoom: 18,
			markers: [{
					address: 'New York Avenue Northwest, Washington, DC, United States',
					html: '',
					popup: false
				}
			]
		});

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	});

})(window.jQuery);

// non jQuery plugins below

