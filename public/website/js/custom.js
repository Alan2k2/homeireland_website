(function () {

	'use strict'


	AOS.init({
		duration: 800,
		easing: 'slide',
		once: true
	});

	var preloader = function() {

		var loader = document.querySelector('.loader');
		var overlay = document.getElementById('overlayer');

		function fadeOut(el) {
			el.style.opacity = 1;
			(function fade() {
				if ((el.style.opacity -= .1) < 0) {
					el.style.display = "none";
				} else {
					requestAnimationFrame(fade);
				}
			})();
		};

		setTimeout(function() {
			fadeOut(loader);
			fadeOut(overlay);
		}, 200);
	};
	preloader();
	

	var tinySdlier = function() {

		var heroSlider = document.querySelectorAll('.hero-slide');
		var propertySlider = document.querySelectorAll('.property-slider');
		var adssSlider = document.querySelectorAll('.adss-slider');
		var maintopadsSlider = document.querySelectorAll('.maintopads-slider');
		
		var bottomadsSlider = document.querySelectorAll('.bottomads-slider');
		var similarpropslider = document.querySelectorAll('.similarpropslider');
		var middleadsSlider = document.querySelectorAll('.middleads-slider');
		var middletwoadsSlider = document.querySelectorAll('.middletwoads-slider');
		var imgPropertySlider = document.querySelectorAll('.img-property-slide');
		var testimonialSlider = document.querySelectorAll('.testimonial-slider');
		

		if ( heroSlider.length > 0 ) {
			var tnsHeroSlider = tns({
				container: '.hero-slide',
				mode: 'carousel',
				speed: 700,
				autoplay: true,
				controls: false,
				nav: false,
				autoplayButtonOutput: false,
				controlsContainer: '#hero-nav',
			});
		}


		if ( imgPropertySlider.length > 0 ) {
			var tnsPropertyImageSlider = tns({
				container: '.img-property-slide',
				mode: 'carousel',
				speed: 700,
				items: 1,
				gutter: 30,
				autoplay: true,
				controls: false,
				nav: true,
				autoplayButtonOutput: false
			});
		}

		if ( propertySlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.property-slider',
				mode: 'carousel',
				speed: 700,
				gutter: 30,
				items: 3,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}
		
				if ( adssSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.adss-slider',
				mode: 'carousel',
				speed: 1500,
				gutter: 140,
				items: 3,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}
			 if ( maintopadsSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.maintopads-slider',
				mode: 'carousel',
				speed: 1500,
				gutter: 30,
				items: 2,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 2
					}
				}
			});
		}
		 
				if ( middleadsSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.middleads-slider',
				mode: 'carousel',
				speed: 1500,
				gutter: 140,
				items: 2,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 2
					}
				}
			});
		}
						if ( middletwoadsSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.middletwoads-slider',
				mode: 'carousel',
				speed: 1500,
				gutter: 140,
				items: 1,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 1
					},
					900: {
						items: 1
					}
				}
			});
		}
		
						if ( bottomadsSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.bottomads-slider',
				mode: 'carousel',
				speed: 1500,
				gutter: 140,
				items: 3,
				interval: 2000 * 10,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}
						if ( similarpropslider.length> 0 ) {
			var tnsSlider = tns({
				container: '.similarpropslider',
				mode: 'carousel',
				speed: 1500,
				gutter: 140,
				items: 3,
				interval: 2000 * 10,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#property-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 3
					},
					900: {
						items: 4
					}
				}
			});
		}		


		if ( testimonialSlider.length> 0 ) {
			var tnsSlider = tns({
				container: '.testimonial-slider',
				mode: 'carousel',
				speed: 700,
				items: 3,
				gutter: 50,
				autoplay: true,
				autoplayButtonOutput: false,
				controlsContainer: '#testimonial-nav',
				responsive: {
					0: {
						items: 1
					},
					700: {
						items: 2
					},
					900: {
						items: 3
					}
				}
			});
		}
	}
	tinySdlier();


	$("#phone").on("input", function() {
    	this.value = this.value.replace(/\D/g,'');
	});
})()