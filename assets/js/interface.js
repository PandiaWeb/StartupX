( function($) {
  'use strict';
$(function(e) {
/*-------------------------------------------------------------------------------
 Newsletter Ajax Form
	-------------------------------------------------------------------------------*/
if ($('.newsletter-js-ajax-form').length) {
	$('.newsletter-js-ajax-form').each(function(){
		$(this).validate({
			errorClass: 'error wobble-error',
			submitHandler: function(form){
				$.ajax({
					type: "POST",
					url:"mail.php",
					data: $(form).serialize(),
					success: function() {
						$('#newsletter_success').addClass('show');
					},

					error: function(){
						$('#newsletter_error').addClass('show');
					}
				});
			}
		});
	});
}	

/*-------------------------------------------------------------------------------
 Contact Ajax Form
	-------------------------------------------------------------------------------*/
if ($('.contact-js-ajax-form').length) {
	$('.contact-js-ajax-form').each(function(){
		$(this).validate({
			errorClass: 'error wobble-error',
			submitHandler: function(form){
				$.ajax({
					type: "POST",
					url:"mail.php",
					data: $(form).serialize(),
					success: function() {
						$('#contact_success').addClass('show');
					},
					error: function(){
						$('#contact_error').addClass('show');
					}
				});
			}
		});
	});
}	



 /*------------------------------------------------------------------
	Countdown
	-------------------------------------------------------------------*/
  // 2018[year] - 12[month] - 01[day]
  
  $('#countdown').countdown('2018/12/01', function(event) { 
	$(this).html(event.strftime('<span class="countdown-period">%-D <span>Day%!D</span></span> <span class="countdown-period">%H <span>Hours</span></span> <span class="countdown-period">%M <span>Minutes</span></span> <span class="countdown-period">%S <span>Seconds</span></span>'));
  });
  
});

})(jQuery);