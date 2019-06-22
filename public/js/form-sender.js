$(function(){
	$("#contactform").submit(function(e){
		e.preventDefault();
		var form = $(this);

		$.ajax({
			type: "POST",
			url: "/sendmessage",
			data: form.serialize(),
			success: function(data) {
				$('div.flash-message').html(data);
				$('[name="nome"]').val('');
				$('[name="cognome"]').val('');
				$('[name="email"]').val('');
				$('[name="messaggio"]').val('');

				$('[name="nome"], [name="cognome"], [name="nome"], [name="email"], [name="messaggio"]').removeClass("is-invalid");   
				$('[class="text-danger"]').remove();
				
			}, 
			error: function( data ) {
				if( data.status === 422 ) {
					var errors = $.parseJSON(data.responseText);
					$.each(errors, function (key, value) {
						// console.log(key+ " " +value);
						
						$('#response').addClass("alert alert-danger");
						if($.isPlainObject(value)) {
							$.each(value, function (key, value) {
								$('[name="' + key + '"]').addClass("is-invalid");                                          
								console.log(key+ " " +value);
								$('#response').show().append(value+"<br/>");
								$('[name="' + key + '"]').show().after("<p class='text-danger'>" + value + "</p>");    
							});
						} else {
							$('[name="' + key + '"]').show().append("<p class='text-danger'>" + value + "</p>");    
							$('#response').show().after(value+"<br/>"); //this is my div with messages
						}
					});
				}
			}
		});
	});
});