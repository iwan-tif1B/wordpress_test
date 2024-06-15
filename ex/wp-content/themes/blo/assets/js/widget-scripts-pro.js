(function ($, elementor) {
    "use strict";

    var Blo = {

        init: function () {

            var widgets = {
                'elementskit-hotspot.default': Blo.Hotspot,
            };
            $.each(widgets, function (widget, callback) {
                elementor.hooks.addAction('frontend/element_ready/' + widget, callback);
            });

        },

        Hotspot: function ($scope) {
			var $el = $scope.find('.ekit-location-on-click > .ekit-location_indicator, .ekit-location-on-hover.click > .ekit-location_indicator'),
				$hoverEl = $scope.find('.ekit-location-on-hover:not(.click) > .ekit-location_indicator'),
				location = $scope.find('.ekit-location');

			function displayContent(){

					let content = $(this).find('.ekit-location_outer'),
						indicator =  $(this).find('.ekit-location_indicator'),
						horizontalCalc =  (indicator.width()/2)+ $(this).find('.ekit-hotspot-vertical-line').height(),
						verticalCalcTB =  (indicator.width()) + $(this).find('.ekit-hotspot-horizontal-line').height(),
						verticalCalcLF =  (indicator.width()) + $(this).find('.ekit-hotspot-horizontal-line').width();

					if($(this).hasClass('ekit_hotspot_follow_line_top')) {
						content.css({'bottom': verticalCalcTB, 'top': 'auto'})
					} else if($(this).hasClass('ekit_hotspot_follow_line_bottom')) {
						content.css({'top': verticalCalcTB, 'bottom': 'auto'})
					} else if($(this).hasClass('ekit_hotspot_follow_line_right_top') || $(this).hasClass('ekit_hotspot_follow_line_left_top')){
						content.css('bottom', horizontalCalc)
					} else if($(this).hasClass('ekit_hotspot_follow_line_right_bottom') || $(this).hasClass('ekit_hotspot_follow_line_left_bottom')){
						content.css('top', horizontalCalc)
					}  else if($(this).hasClass('ekit_hotspot_follow_line_right')) {
						content.css('top', -((content.height() / 2) - (indicator.width()/2) ))
						content.css('left', verticalCalcLF)
					}  else if($(this).hasClass('ekit_hotspot_follow_line_left')) {
						content.css('top', -((content.height() / 2) - (indicator.width()/2) ))
						content.css('right', verticalCalcLF)
					}
					// content class not found
					if(content.length === 0) {
                        return;
                    }
					if(content.offset().left < 0){
						if($(window).width() <= 480){
							$(this).find('.ekit-location_inner').css('max-width',$(window).width());
						}
						$(this).find('.ekit-location_inner').css('left',  Math.abs(content.offset().left))
					} else if(content.offset().left > 0){
						if($(window).width() <= 480 && content.width() > $(window).width() ){

							$(this).find('.ekit-location_inner').css('max-width',$(window).width());
							$(this).find('.ekit-location_inner').css('left', -Math.abs(content.offset().left));
						} else  {
							if(content.offset().left + content.width() > $(window).width()){
								let calc = Math.abs((content.offset().left + content.width()) - $(window).width());

								$(this).find('.ekit-location_inner').css('left', -calc);
							} else {
								$(this).find('.ekit-location_inner').css('right', 0);
							}

						}
					}
			}

			$(window).resize(function(){
				if($(window).width() <= 480){
					if(location.hasClass('hotspot-following-line-style') && $(window).width() <= 480){
						location.removeClass('hotspot-following-line-style').addClass('hotspot-following-line-straight ekit_hotspot_follow_line_top')
					}
				}

				// if content goes inside body in the top then revert it to bottom
				$scope.find('.ekit-location_outer').each(function(){

					if($(this).offset().top < 0 ){
						$(this).parents('.ekit-location-on-hover').addClass('bottom');
					}
					if($(this).parent().hasClass('auto') && $(this).offset().top < 0){
						$(this).parent().removeClass('ekit_hotspot_follow_line_top').addClass('ekit_hotspot_follow_line_bottom');
					}
				});

				location.each(displayContent);

			})
			$(window).trigger('resize')

			$el.on('click', function () {
				if(!$scope.find('.ekit-all-activated').length){
					$(this).parent().siblings().removeClass('active');
				}
				$(this).parent().toggleClass('active').removeClass('ekit-all-activated');
			});
			$hoverEl.on('mouseenter', function () {
				location.removeClass('active');
			});
		},

    };
    $(window).on('elementor/frontend/init', Blo.init);
}(jQuery, window.elementorFrontend));