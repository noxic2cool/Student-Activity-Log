<?php
require_once('config.php');
?>
<!DOCTYPE html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="sigsty.css">
</head>
<body>
<div>
	<?php
	
	?>
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">

			<h1>Registration</h1>
			<p>Fill up the form with correct values.</p>			
			<label for="firstname"><b>First Name</b></label>
			<input type="text" name="firstname" id="firstname" required>

			<label for="lastname"><b>Last Name</b></label>
			<input type="text" name="lastname" id="lastname" required>

			<label for="username"><b>Username</b></label>
			<input type="email" name="username" id="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" name="password" id="password" required>

			<label for="college"><b>College</b></label>
			<input type="text" name="college" id="college" required>

			<label for="major"><b>Major</b></label>
			<input type="text" name="major" id="major" required>

			<button type="submit" name="create" id="register">Sign Up</button>
			<button class="signin" onclick="location.href ='login.php'">Log In</button>
				
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();


			if(valid){


			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var username = $('#username').val();
			var password = $('#password').val();
			var college = $('#college').val();
			var major = $('#major').val();

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, lastname: lastname, username: username, password: password, college: college, major: major},
					success: function(data){
					Swal.fire({
						'title': 'Successful',
						'text': data,
						'type': 'success'
					})

					},
					error: function(data){
					Swal.fire({
						'title': 'Error',
						'text': 'There were erros saving the data..',
						'type': 'error'
					}
				})
				
			}else{
				
			}

			
		});
		
	});
</script>
</body>
</html>