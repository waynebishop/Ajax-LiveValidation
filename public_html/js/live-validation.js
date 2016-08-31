$(document).ready(function() {
	$('#username').blur(findusername);
	$('#email').blur(findemail);

});

function findusername() {
	// Get the value of the input field
	var usernameValue = $(this).val();
	
	if(usernameValue.length === 0) {
		// Field is Required
		$('#username-message').removeClass('success').addClass('error');
		$('#username-message').html('This field is required');
		return;
	} else {
		$('#username-message').removeClass('error').addClass('success');
		$('#username-message').html('Good to go');

	}

	var dataForServer = {
		username:usernameValue
	}

	$.ajax({
		type:'post',
		url: 'api/validate-username.php',
		data: dataForServer,
		success: function(dataFromServer) {
			console.log(dataFromServer);
			if(dataFromServer === 'success') {
				$('#username-message').removeClass('error').addClass('success');
				$('#username-message').html('This username is available');
			} else {
				$('#username-message').removeClass('success').addClass('error');
				$('#username-message').html('This username is unavailable');	
			}
		},
		error: function() {
			console.log('Cannot connect to Server');
		}


	});

}

function findemail() {
	// Get value email input
	var emailValue = $(this).val();

	if(emailValue.length === 0) {
		// Field required
		$('#email-message').removeClass('success').addClass('error');
		$('#email-message').html('This field is required');
		return;
	} else {
		$('#email-message').removeClass('error').addClass('success');
		$('#email-message').html('Good to go');
	}

	var dataForServer = {
		email:emailValue
	}

	$.ajax({
		type:'post',
		url: 'api/validate-email.php',
		data: dataForServer,
		success: function(dataFromServer) {
			console.log(dataFromServer);
			if(dataFromServer === 'success') {
				$('#email-message').removeClass('error').addClass('success');
				$('#email-message').html('This email is available');
			} else {
				$('#email-message').removeClass('success').addClass('error');
				$('#email-message').html('This email is unavailable');	
			}
		},
		error: function() {
			console.log('Cannot connect to Server');
		}

	});

}







