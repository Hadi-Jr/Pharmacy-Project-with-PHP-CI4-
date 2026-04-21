/*=========================================================================================
[Form Wizard Custom Javascript]

Project	     : Seipkon - Responsive Admin Template
Author       : Hassan Rasu
Author URL   : https://themeforest.net/user/themescare
Version      : 1.0
Primary use  : Seipkon - Responsive Admin Template

Only Use For Form Wizard (form-wizards.html) Page.

==========================================================================================*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		/*
		=================================================================
		masked input JS
		=================================================================
		*/
		$('#form_wizard_1_old').steps({
			headerTag: 'h3',
			bodyTag: 'section',
			autoFocus: true,
			titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
		});
		/*
		=================================================================
		masked input JS
		=================================================================
		*/


		$('#form_wizard_1').steps({
			headerTag: 'h3',
			bodyTag: 'section',
			autoFocus: true,
			titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
			onStepChanging: function (event, currentIndex, newIndex) {
				if (currentIndex < newIndex) {
					// Step 1 form validation
					if (currentIndex === 0) {

						var egn = $('#egn').parsley();
						var egn_value = $('input[name="egn"]').val();

						if (egn.isValid()) {
							return true;
						} else {
							egn.validate();
						}

					}

					// Step 2 form validation
					if (currentIndex === 1) {

						var client_id = $('#reservation_form input[name="client_id"]').parsley();
						var clinicalpath_id = $('#reservation_form input[name="clinicalpath_id"]').parsley();
						var room_id = $('#reservation_form input[name="room_id"]').parsley();
						var room_type = $('#reservation_form input[name="room_type"]').parsley();
						var payment_status = $('#reservation_form input[name="payment_status"]').parsley();
						var need_payment = $('#reservation_form input[name="need_payment"]').parsley();

						if (client_id.isValid() && clinicalpath_id.isValid() && room_id.isValid() && room_type.isValid() && payment_status.isValid() && need_payment.isValid()) {
							return true;
						} else {
							client_id.validate();
							clinicalpath_id.validate();
							room_id.validate();
							room_type.validate();
							payment_status.validate();
							need_payment.validate();

							//additional if beds
						}
					}

					// Always allow step back to the previous step even if the current step is not valid.
				} else {
					return true;
				}
			},
			onFinished: function (event, currentIndex) {
		      	var form_data = $('#reservation_form').serializeArray();
				$('body').removeClass('loaded');

		         $.ajax({
		             url: base_url + '/reservation/create_action',
		             type: 'post',
		             data: form_data,
		             dataType: 'json',
		             success: function(response) {
		                 if(response.type == 'success'){
		                 	$('.reservation_form_resp_hldr').empty().html(`
								<div class="alert alert-success" role="alert">
								  `+response.message+`
								</div>
		                 	`);
			                setTimeout(function() {
			                    window.location.href = base_url+'/reservations/search/';
			                }, 3000);
		                 }
		             }
		         });

			}
		});


	});


}(jQuery));