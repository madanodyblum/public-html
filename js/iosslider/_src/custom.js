
			$(document).ready(function() {
				
				$('.iosSlider').iosSlider({
					desktopClickDrag: true,
					snapToChildren: true,
					navSlideSelector: '.sliderContainer .slideSelectors .item',
					onSlideComplete: slideComplete,
					onSliderLoaded: sliderLoaded,
					onSlideChange: slideChange,
					autoSlide: true,
					scrollbar: true,
					scrollbarContainer: '.sliderContainer .scrollbarContainer',
					scrollbarMargin: '0',
					scrollbarBorderRadius: '0'
				});
				
			});
			
			function slideChange(args) {
						
				$('.sliderContainer .slideSelectors .item').removeClass('selected');
				$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
			
			}
			
			function slideComplete(args) {
				
				if(!args.slideChanged) return false;
				
				$(args.sliderObject).find('.text1, .text2, .text3, .text4, .text5').attr('style', '');
				
				$(args.currentSlideObject).find('.text5').animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text1').delay(200).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(400).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text3').delay(600).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text4').delay(800).animate({
					left: '0px',
					opacity: '1'
				}, 700, 'easeOutQuint');
				
			}
			
			function sliderLoaded(args) {
					
				$(args.sliderObject).find('.text1, .text2, .text3, .text4, .text5').attr('style', '');
				
				$(args.currentSlideObject).find('.text5').animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text1').delay(200).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(400).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text3').delay(600).animate({
					left: '30px',
					opacity: '1'
				}, 400, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text4').delay(800).animate({
					left: '0px',
					opacity: '1'
				}, 700, 'easeOutQuint');
				
				slideChange(args);
				
			}