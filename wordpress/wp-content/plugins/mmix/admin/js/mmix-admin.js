(function( $ ) {
	'use strict';
	
	function hide_all(box_types) {
		box_types.map(type => {
			$('#candidat_details_' + type).hide()
		})
	}
	
	$(document).ready( () => {
		if($('#new_candidat_trigger').length) {
			let box_types = []
			$('#candidat_creation option').each(function () {
				box_types.push(this.value)
			})
			
			hide_all(box_types)
			$('#candidat_details_' + $('#candidat_creation').get(0).value).show()
			
			$('#candidat_creation').change(function () {
				hide_all(box_types)
				$('#candidat_details_' + this.value).show()
			})
		}
	})

})( jQuery );
