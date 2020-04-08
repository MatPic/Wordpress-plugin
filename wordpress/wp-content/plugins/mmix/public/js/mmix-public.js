(function( $ ) {
	'use strict';
	
	$(document).ready(function () {
		const restURL = $('.mmix-candidatures').data('rest-url')
		$('.js-mmix-view').click(function (ev) {
			ev.preventDefault()
			const url = this.href
			const $modalWrapper = $('#candidate-modal-wrapper')
			const $modal = $('#candidate-modal')
			$modalWrapper.addClass('visible')
			$.ajax({
				url
			}).done(data => {
				const resultPage = $.parseHTML(data)
				$modal.html($(resultPage).find('[data-api]').html())
			})
		})

		$('#candidate-modal-wrapper').click(function (ev) {
			if (ev.target === this) {
				$(this).removeClass('visible')
			}
		})
		
		$('.mmix-filter-btn').click(function (ev) {
			ev.preventDefault()
			
			const selector = this.dataset.filter === "*" ? '' : this.dataset.filter
			$('.mmix_card').hide()
			$('.mmix_card' + selector).show()
		})
	})

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );