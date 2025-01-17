(function() {

	jQuery(document).ready(function() {

		var options = {
			ovalWidth: 400,
			ovalHeight: 50,
			offsetX: 100,
			offsetY: 325,
			angle: 0,
			activeItem: 0,
			duration: 350,
			className: 'item'
		}

		var carousel = jQuery('.carousel').CircularCarousel(options);

		/* Fires when an item is about to start it's activate animation */
		carousel.on('itemBeforeActive', function(e, item) {
			jQuery(item).css('box-shadow', '0 0 20px blue');
		});

		/* Fires after an item finishes it's activate animation */
		carousel.on('itemActive', function(e, item) {
			jQuery(item).css('box-shadow', '0 0 20px green');
		});

		/* Fires when an active item starts it's de-activate animation */
		carousel.on('itemBeforeDeactivate', function(e, item) {
			jQuery(item).css('box-shadow', '0 0 20px yellow');
		})

		/* Fires after an active item has finished it's de-activate animation */
		carousel.on('itemAfterDeactivate', function(e, item) {
			jQuery(item).css('box-shadow', '');
		})

		
		/* Previous button */
		jQuery('.controls .previous').click(function(e) {
			carousel.cycleActive('previous');
			e.preventDefault();
		});

		/* Next button */
		jQuery('.controls .next').click(function(e) {
			carousel.cycleActive('next');
			e.preventDefault();
		});

		/* Manaully click an item anywhere in the carousel */
		jQuery('.carousel .item').click(function(e) {
			var loc = jQuery(this).children('a').attr('href');
			window.location.href = loc;
		});
	
	});

})();