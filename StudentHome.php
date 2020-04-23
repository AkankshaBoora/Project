<?php
	session_start();
	if(!isset($_SESSION['rollno']))
	{
		header('location:StudentLogin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Student Home</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<!-- <style type="text/css"> -->
        <!--?php include 'pagestyle.css'; ?>
    </style-->
    <link href="pagestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container con1">
 		<div class="wrapper" id="top_div">
			<div class="row">
				<div class="col-sm-2"><br>
					<div id="logo_left">
						<img src="Icons\Centenarylogo.jpg" alt="some text" width=100 height=80>
					</div>
				</div>
				<div class="col-sm-8">
					<h2><b><center>OSMANIA UNIVERSITY</h2>
					<h3><b><center>Department of Computer Science & Engineering</h3>
				</div>
				<div class="col-sm-2">
					<div id="logo_right">
						<img src="Icons/logo.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container con">
		<div class="row">
			<div class="col-sm-9">
				<ul>
    				<li><a href="StudentHome.php"><h4><b>Home</b></h4></a></li>
					<li><a href="StudentLogout.php"><h4><b>Logout</b></h4></a></li>
	 	 		</ul>
	 	 	</div>
	 	 	<div class="col-sm-3">
	 	 		<h4><b>Welcome <?php echo $_SESSION['rollno']; ?></b></h4>
	 	 	</div>
	 	</div>
	</div>
	<div class="container con4">
		<div class="wrapper" id="top_div">
			<div class="row"><br>
				<div class="col-sm-3">
					<a href="Attendance.php">
						<img src="Icons/Attendance.png"><h4>&nbsp;&nbsp;&nbsp;Attendance</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="Timetable.php">
						<img src="Icons/Timetable.png"><h4>&nbsp;&nbsp;&nbsp;&nbsp;Timetable</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="BESyllabus.php">
						<img src="Icons/Syllabus.png"><h4>&nbsp;&nbsp;&nbsp;&nbsp;Syllabus</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="QuestionPapers.php">
						<img src="Icons/QuestionPapers.png"><h4>Question papers</h4>
					</a><br>
				</div>
				<div class="col-sm-3">
					<a href="MarksList.php">
						<img src="Icons/MarksList.jpg"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marks List</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="Feedback.php">
						<img src="Icons/Feedback.jpg"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="ReferenceBooks.php">
						<img src="Icons/link.png"><h4>Reference Books</h4>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="StudyMaterials.php">
						<img src="Icons\Resources.png"><h4>&nbsp;Study Materials</h4>
					</a><br>
				</div>
				<div class="col-sm-12">
					<a href="UploadDisplay.php">
						<img src="Icons\Assignment.png"><h4>&nbsp;Assignments</h4>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>