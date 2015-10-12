(function($){	
	
	// -------------------------------------------------------------------------------------------------------
	// Form Validation script - used by the Contact Form script
	// -------------------------------------------------------------------------------------------------------
	
	function validateMyAjaxInputs() {

		$.validity.start();
		// Validator methods go here:
		$("#name").require();
		$("#email").require().match("email");
		$("#subject").require();	
		$("#message").require();

		// End the validation session:
		var result = $.validity.end();
		return result.valid;
	}
	
	// -------------------------------------------------------------------------------------------------------
	// ClearForm 
	// -------------------------------------------------------------------------------------------------------
	
	$.fn.clearForm = function() {
		return this.each(function() {
		var type = this.type, tag = this.tagName.toLowerCase();
		if (tag == 'form')
		return $(':input',this).clearForm();
		if (type == 'text' || type == 'password' || tag == 'textarea')
		this.value = '';
		else if (type == 'checkbox' || type == 'radio')
		this.checked = false;
		else if (tag == 'select')
		this.selectedIndex = -1;
		});
	};
	

	$(document).ready(function(){
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////						   
		
		// -------------------------------------------------------------------------------------------------------
		// Contact Form 
		// -------------------------------------------------------------------------------------------------------
		
		$("#contact-form").submit(function () {
								
			if (validateMyAjaxInputs()) { //  procced only if form has been validated ok with validity
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "_layout/php/send.php",
					data: str,
					success: function (msg) {
						$(document).ajaxComplete(function (event, request, settings) {
							if (msg == 'OK') { // Message Sent? Show the 'Thank You' message
								result = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
								$('#contact-form').clearForm();
							} else {
								result = msg;
							}
							$("#formstatus").html(result);
						});
					}
		
				});
				return false;
			}
		});
		
		// -------------------------------------------------------------------------------------------------------
		// Services 
		// -------------------------------------------------------------------------------------------------------
		
		$(".service-overview h4").click(function () {
			if ($(this).hasClass("arrow-top")) {
				$(this).siblings().slideToggle('fast', function () {
		
				});
				$(this).removeClass("arrow-top");
			} else {
				$(this).siblings().slideToggle('fast', function () {
					$(this).siblings().addClass('arrow-top');
				});
			}
		});

		// -------------------------------------------------------------------------------------------------------
		// Hover over Portfolio Overview + make entire portfolio overview clickable
		// -------------------------------------------------------------------------------------------------------
	
		$('.portfolio-item-overlay').hide();
		
		$(".portfolio-item").hover(
		  function(){$(this).find('.portfolio-item-overlay').show();},
		  function(){$(this).find('.portfolio-item-overlay').hide();}
		);

		$(".portfolio-item").click(function(){
			 window.location=$(this).find("a").attr("href");
			 return false;
		});

	
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
		
	});
	
})(window.jQuery);	

// non jQuery scripts below