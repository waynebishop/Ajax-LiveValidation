<!DOCTYPE html>
<html>
<head>
	<title>AJAX - Live Validation</title>

	<style type="text/css">

		.success {
			color: #4cae4c;
		}

		.error {
			color: #d43f3a;
		}

	</style>


</head>
<body>
	<h1>Live Validation</h1>	
	<form id="register">
		<h2>Register</h2>		

		<div>
			<label for="username">Username:</label>
			<input type="text" id="username" placeholder="username">
			<span id="username-message"></span>	
		</div>

		<div>
			<label for="emaile">Email:</label>
			<input type="text" id="email" placeholder="email">
			<span id="email-message"></span>	
		</div>


		<input type="submit" value="Register!">	
		
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/live-validation.js"></script>
</body>
</html>