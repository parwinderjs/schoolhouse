<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="css/cerulean.min.css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand">Schoolhouse</a>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Login
    				<span class="caret"></span></a>
    				<ul class="dropdown-menu">
      				<li><a href="TeacherModule/teacherLogin.php">Teacher</a></li>
      				<li><a href="StudentModule/studentLogin.php">Student</a></li>
    				</ul>
    			</li>
				<li><a href=#>About</a></li>
			</ul>
		</div>		
	</nav>
	<br /><br /><br /><br />
	<div class="container">
	<div class="panel panel-primary col-md-4 col-md-offset-4"><br />
		<div class="panel-heading"><h1 class="panel-title">Register</h1></div>
		<div class="panel-body">
			<a href="TeacherModule/teacherRegister.php" role="button" class="btn btn-default btn-block">Teacher</a><br />
			<a href="StudentModule/studentRegister.php" role="button" class="btn btn-default btn-block">Student</a><br />
		</div>
		<div class="panel-footer">
		<br />
		</div><br />
	</div>	
	</div>
	<br /><br />
	<div class="panel-footer"></div>
</div>	

</body>
</html>
<?php 

 ?>