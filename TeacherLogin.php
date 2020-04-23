<!DOCTYPE html>
<html>
<head>
	<title>Teacher Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<div class="col-md-3">
				<p>	</p>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<center><h2 class="text-success text-center"><b>TEACHER LOGIN</b></h2></center>
					</div>
					<div class="panel-body">
						<form action="TeacherLoginValidation.php" method="post" onsubmit="return validation()" class="bg-light">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" id="username" autocomplete="off" required>
								<span id="username" class="text-danger font-weight-bold"></span>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
								<span id="password" class="text-danger font-weight-bold"></span>
							</div>
							<center><button type="submit" class="btn btn-primary">Login</button></center>
							<div class="form-group"> 
								<div class="col-md-12 control"> 
									<center>
										<div class="no-acc"> 
											<br>Don't have an account! 
											<a href="TeacherSignup.php"> Sign Up Here </a> 									 
										</div>
									</center> 
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<p>	</p>
			</div>
		</div>
	</div>
<div id="user" class="text-center" style="color:red;"></div>
<script type="text/javascript">
	function validation()
	{
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		if(!isNaN(username))
		{
			document.getElementById('user').innerHTML = "FIRSTNAME: ** Only characters are allowed";
			return false;
		}
		else if((username.length < 3) || (username.length > 20))
		{
			document.getElementById('user').innerHTML = "FIRSTNAME: ** Length must be in between 2-20 characters";
			return false;
		}

		else if((password.length < 6) || (password.length > 20))
		{
			document.getElementById('user').innerHTML = "PASSWORD: ** Length must be in between 5-20 characters";
			return false;
		}
	}
</script>
</body>
</html>