<?php
session_start();
if (isset($_SESSION["user"]) && ($_SESSION["user"]==1)) {
header("Location: index.php");
}

else 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../../lib/font-awesome/css/font-awesome.min.css">
	<title>Sign in</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Fonts -->
	<link href="" rel="stylesheet"> 
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery/jquery-migrate.min.js"></script>

	<!-- Libraries CSS Files -->
	<link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../../lib/animate-css/animate.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="../../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/animate.css">

	<!-- Favicon -->
	<link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
	
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/submission.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body class="bodyOfForm header">
<!--==========================
  Header Section
============================-->
  <div id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../../index.html"><img src="../../images/wlogo.png" alt="logo"/></img></a>
      </div>
      <!-- #nav-menu-container -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../../index.html">Home</a></li>
          <li><a href="index.php">Questions</a></li>
          <li><a href="../../editor.html">Editor</a></li>
          <li><a href="../../quiz">Quiz</a></li>
        </ul>
      </nav>
    </div>
  </div>


		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<center><h3>Registration form</h3></center>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your surname</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="surname" id="surname"  placeholder="Enter your surname"/>
								</div>
							</div><!-- 
							<br>
							<label for="gender">Gender selection</label>
							<div class="btn-group " data-toggle="buttons" name="gender">

								<label class="btn btn-primary">
									<input type="radio" name="gender" value="male" class="form-control" id="gender">Male
								</label>
								<label class="btn btn-primary">
									<input type="radio" name="gender" value="female" class="form-control" id="gender">Female
								</label>
							</div> -->

						<div class="form-group">
							<label for="phone" class="cols-sm-2 control-label">Phone Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									<div id="none">Password didn't match</div>
								</div>
							</div>
						</div>

						<div class="form-group ">
					<!-- Submit button --> 
					<button name = "submit" id="submitbtn" class="btn btn-primary btn-block" value="Submit">
					<span class="fa fa-send iconSizing">Submit</span></button>
						</div>
						<center>
							 <a href="../../copied/signin.php" class="forget">Already member?</a>
						</center>						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="../../libjs/bootstrap.min.js"></script> -->
</div>
		</div>
		</div>
	</form>

	<!--==========================
  Footer
============================--> 
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>CodeML Web Design</strong>. All Rights Reserved
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<!-- Required JavaScript Libraries -->
	<script src="../../lib/jquery/jquery.min.js"></script>
	<script src="../../lib/jquery/jquery-migrate.min.js"></script>
	<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 	<script src="../../lib/superfish/hoverIntent.js"></script>
<script src="../../lib/superfish/superfish.min.js"></script> -->
	<script src="../../lib/morphext/morphext.min.js"></script>
	<script src="../../lib/wow/wow.min.js"></script>
	<script src="../../lib/stickyjs/sticky.js"></script>
<!-- 	<script src="../../lib/easing/easing.js"></script> -->

	<!-- Template Specisifc Custom Javascript File -->
	<script src="../../js/custom.js"></script>
</body>
</html>
<?php
}
?>