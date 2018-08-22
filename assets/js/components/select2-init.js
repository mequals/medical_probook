(function(window, document, $, undefined) {
	  "use strict";
	$(function() {

		// basic
		$("#s2_demo1").select2();

		// basic
		$(".company_country").select2();

		// basic
		$(".company_state").select2();

		// basic
		$(".company_city").select2();
		
		// nested
		$('#s2_demo2').select2({
			placeholder: "Select a state"
		});

		// multi select
		$('#s2_demo3').select2({
			placeholder: "Select a state"
		});

		// multi select
		$('#product_units').select2({
			placeholder: "Select a Units"
		});

		// multi select
		$('#Units_id').select2({
			placeholder: "Select a state"
		});

		// multi select
		$('#prefered_supplier').select2({
			placeholder: "Select a state"
		});


		// placeholder
		$("#s2_demo4").select2({
			placeholder: "Select a State",
			allowClear: true
		});

		// Minimum Input
		$("#s2_demo5").select2({
			minimumInputLength: 2,
			placeholder: "Select a State",
		});


	});

})(window, document, window.jQuery);
