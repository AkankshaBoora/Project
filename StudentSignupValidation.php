<?php 

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
	// echo "connection successful";
	mysqli_select_db($con, 'mydatabase');

	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$rollno = $_POST['rollno'];

	$q = "select * from signup where rollno ='$rollno' ";

	$result = mysqli_query($con, $q);

	if(mysqli_num_rows($result) > 0)
	{
		$message = "Try registering using another roll number or email";
		echo "<script type='text/javascript'>alert('$message'); window.location = 'StudentSignup.php'; </script>"; 
	}
	else
	{
		$qy = " insert into signup(email, firstname, lastname, password, rollno) values ('$email', '$firstname', '$lastname', '$password', '$rollno')";
		mysqli_query($con, $qy);
		if($qy)
		{
			echo "You have registered successfully";
		}
		header('location:StudentLogin.php');
	}
}
else
{
	echo "no connection";
}

?>