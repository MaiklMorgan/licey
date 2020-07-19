require('./bootstrap');
require('./bootstrapValidator.min.js');
require('./jquery.expander.min.js');
require('owl.carousel');
require('magnific-popup');


(function($){
	

	if($.fn.bootstrapValidator){
		$('.form-validate')
			.bootstrapValidator({
			    feedbackIcons: {
			      	valid: 'fa fa-check',
			      	invalid: 'fa fa-times',
			      	validating: 'fa fa-refresh'
			    },
			    icon: {
			      	valid: 'fa fa-check',
			      	invalid: 'fa fa-times',
			      	validating: 'fa fa-refresh'
			    },
			    live: 'disabled',
			    excluded: [':disabled'],
			    fields: {
			    	'name': {
			        	validators: {
			          		notEmpty: {
			            		message: 'Введите ваше имя'
			          		}
			       		},
			      	},
				    'phone': {
				        validators: {
				          	notEmpty: {
				            	message: 'Введите ваш номер'
				          	},
				          	regexp: {
				            	message: 'Неверный формат номера',
				            	regexp: /^([0-9\(\)\/\+ \-]*)$/
				          	}
				        }
				    },
				    'email': {
			        	validators: {
			          		notEmpty: {
			            		message: 'Введите ваш email'
			          		},
			          		emailAddress: {
			            		message: 'Email введен не правильно'
			          		}
			        	}
			      	}
			    }
			})
			.on('submit', function(event){
				event.preventDefault();
			})
			.on('click', '.btnSubmit', function(event){
				event.preventDefault();

				var $button	 			= $(this),
	    			$form 				= $button.closest('form'),
	    			bootstrapValidator 	= $form.data('bootstrapValidator'),
	    			data 				= {};

	    		bootstrapValidator.validate();

	    		if(!bootstrapValidator.isValid()) return;

	    		var formData = new FormData($form.get(0));

	    		$.ajax({
				    url: 			$form.attr('action'),
				    type: 			$form.attr('method'),
				    data: 			formData,
				    processData: 	false,
					contentType: 	false,
				    dataType: 		'json',
				    beforeSend: function(){
				    	$button.button('loading');
				    	// console.log(1);
				    },
				    complete: function(){
				    	$button.button('reset');
				    },
				    success: function(data){
				    	if(data.status.toLowerCase() == 'ok'){
				    		var height = $form.find('.form__content').outerHeight();

				    		$form.find('.form__message').height(height);
				    		$form.addClass('form-sent');
	          
				    		$form[0].reset();
							bootstrapValidator.resetForm();
				    	}
				    }
				});
			});
	}

	if($.fn.inputmask){
		$('[type="tel"]').inputmask({mask: '+38 (999) 999 99 99'})
	}
})(jQuery)