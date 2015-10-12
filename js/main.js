(function($){	
	

	$(document).ready(function(){
		
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
		
		//  jQuery Superfish
		// -------------------------------------------------------------------------------------------------------

		$('#menu').superfish();

		//  Animate.css
		// -------------------------------------------------------------------------------------------------------
		
		$('.page-boxed .pull-up').addClass('animated fadeInUp');
		$('.page-boxed .section-title').addClass('animated fadeInDown');
		

		$('.works-list-container').each(function(){
			$(this).magnificPopup({
		        delegate: '.portfolio-item', // the selector for gallery item
		        type: 'image',
		        image: {
		        	titleSrc: function(item){
		        		var projectUrl = $(item.el).data("project-src"),
		        			projectName = $(item.el).data("project-title"),
		        			taxName = $(item.el).data("project-tax"),
		        			taxUrl = $(item.el).data("project-tax-url");

		        		if( projectUrl !== "#" ) {
		        			return '<a href="' + taxUrl +'">' + taxName +'</a> &raquo; ' +projectName + ' (<a href="' + projectUrl +'" rel="nofollow" target="_blank">Click Here to View Website</a>)';
		        		}else {
		        			return '<a href="' + taxUrl +'">' + taxName +'</a> &raquo; ' +projectName;
		        		}
		        	}
		        },
		        gallery: {
		          enabled:true
		        },
  				mainClass: 'fadeIn animated'
			});
		});

		function calculateChildHeight(carouselObj){
			var $this = carouselObj,
				containerHeight = $this.outerHeight(),
				carouselChildren = $this.find('.service');

				carouselChildren.each(function(){
					$(this).height(containerHeight);
				});
		}


		$("#services-list-horz").owlCarousel({
    		items : 5,
		    itemsDesktop : [1199,5],
		    itemsDesktopSmall : [980,5],
		    itemsTablet: [768,2],
		    itemsTabletSmall: false,
		    itemsMobile : [479,1],
		    afterUpdate: function(){
		    	calculateChildHeight($("#services-list-horz"));
		    },
		    navigation: true,
		    navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
		});


	});
	
})(window.jQuery);	

// non jQuery scripts below