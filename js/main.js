$(document).ready(function() {
	$('#contact form').on('submit',function(e){
		e.preventDefault();
		var $form = $(e.currentTarget),
			$email = $form.find('#contact-email'),
			$button = $form.find('button[type=submit]');

		if($email.val().indexOf('@') == -1) {
			vaca= $email.closest('form-group')
			$email.closest('form-group').addClass('has-error');
		} else{
			$form.find('.form-group').addClass('has-error').removeClass('has-error');
			$button.attr('disabled','disabled');
			$button.after('<span>Message sent. We feed back soonest</span>');
		}
	});
	$('#sign-btn').on('click',function(e){
			$(e.currentTarget).closest('ul').hide();
			$('form#signin').fadeIn('fast');
	});
	
	// Ajax funtion to display result
	$('#btnSearch').on('click', function(event) {
		event.preventDefault();
		// Get user selection values
		var job = $('#keyword').val();
		var job_cat = $('#job_cat').val();
		var location = $('#location').val();
		$.ajax({
			type: 'POST',
			url:'process.php',
			data: {job:job, job_cat:job_cat, location:location },
			dataType: 'json',
			success: function(response){
				var result = '';
				for ( i = 0; i < response.length; i++) {
					result += '<tr>';
					result += '<td>';
					result += response[i].title;
					result += '</td>';
					result += '</tr>';
				}
				$('#tblResult').html(result);
            }
		})
	});
});