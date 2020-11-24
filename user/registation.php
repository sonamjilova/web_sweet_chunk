<?php include("dbconnect.php");?>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="registration_main.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<script src="jquery.js"></script>
	<script type="text/javascript" src="new.js"></script>
</head>
<body style="padding:0; margin-top:-25px;">
				<header id="header">
				<div class="main-top-header">
				<div class="top-header">
				<div id="logo" class="logo">
						<img style="height:100px; width:200px;" src="images/logo_sweet_chunk.png">
					</div>
					<div class="menu">
					<ul>
					<li>
						<span id="sign" style="border-right: 1px solid;"><a href="registation.php" class="login">Sign up</a></span></li>

						<li>   <span id="login" ><a href="login.php" class="login">Login</a></span></li>
						   	<li><span id="welcome" style="border-right: 1px solid; margint-left:-100px;display:none;">
							<?php
							  if(isset($_SESSION['uname']))
							show();
						?></span></li>
						   <li><span id="logout" style="display:none"><a href="logout.php">Logout</a></span></li>
					</ul>
					</div>
					</div>

		</div>

<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;">Category</a>
				<ul>
				<li style="display:block;"><a href="non_egg.php" style="border:none;">Egg_less</a></li>
				<li style="display:block;"><a href="egg.php" style="border:none;">Egg</a></li>
				</ul>
				</li>
				<li ><a href="cart.php" style="border:none;">Cart</a></li>
				<li ><a href="feedback.php" style="border:none;">Feedback</a></li>
				<li class="current"><a href="about.php" style="border:none;">About Us</a></li>
		         <li ><a href="contact.php" style="border:none;">Contact Us</a></li>
			</ul>
			</div>
		</nav>
		<nav id="hiddenmenu" style="z-index:200;">
<div class="hiddenmenu">
	<div id="logo" class="logo" style="float: left; width: 600px;">
						<img style="height:100px; width:200px;" src="images/logo_sweet_chunk1.png">
					</div>
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;">Category</a></li>
				<li ><a href="cart.php" style="border:none;">Cart</a></li>
				<li ><a href="feedback.php" style="border:none;">Feedback</a></li>
				<li class="current"><a href="about.php" style="border:none;" class="active">About Us</a></li>
		         <li ><a href="contact.php" style="border:none;">Contact Us</a></li>
			</ul>
			</div>
		</nav>
		</header>
		<div id="body" style="height: 1000px; margin-top:-60px;">
			<div id="body-align" style=" margin: 0 auto;">
				<div class="title"><h1 style="color:#b13c68;">Sign Up</h1></div>
<div class="container">
	<div class="left"></div>
	<div class="right">
		<div class="formBox">
			<form action="registation.php" method="post">
				<p>First Name</p>
              <input type="text" name="fname" placeholder="Enter first name">
              	<p>Last Name</p>
              <input type="text" name="lname" placeholder="Enter last name">
              	<p>Email</p>
              <input type="text" name="email" placeholder="Enter email">
			  <p>User Name</p>
              <input type="text" name="uname" placeholder="Enter user name">
              	<p>Contact No</p>
              <input type="text" name="contact1" placeholder="enter contact no">

              <p>Password</p>
              <input type="password" name="password1" placeholder="*****">
              <p>Confirm Password</p>
              <input type="password" name="password" placeholder="*****">
              <br>
              <input type="submit" name="submit" value="Sing up">
              <br>
              <a href="login.php">Log in</a>
              <a href="index.php" style=" margin-left:70%;">Home</a>
			</form>
		</div>
	</div>
</div>
			</div>

		</div>
	<?php include("footer.php");?>

	<?php
	  if(isset($_POST["submit"]))
	  {
	  $fname = $_POST["fname"];
	   $uname = $_POST["uname"];
	  $lname =$_POST["lname"];
	  $email=$_POST["email"];
	  $contact1=$_POST["contact1"];
	  //$contact2=$_POST["contact2"];
	  //$addr=$_POST["addr"];
	  $password=$_POST["password1"];
	  $run1=0;
	  $run2=0;
	  $run3=0;
	 // INSERT INTO `registration`(`fn`, `ln`, `email`, `address`, `username`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	  $query="insert into registration values('$fname','$lname','$email',' $uname','$password','user')";
	  $query1="insert into contact values('$contact1','$email')";
	  //$query2="insert into contact values('$contact2','$email')";
	  $run1= mysqli_query($con,$query);
	  if($run1==1)
	  {
		  $run2= mysqli_query($con,$query1);
	    //  $run3= mysqli_query($con,$query2);
	  }

	     if($run1==1 && $run2==1){
		 ?>
		 <script type="text/javascript">
				   alert("Registration Successful !!!");
				   window.location.replace("login.php");
				  </script>
	 <?php
	  }
	     else {
		  echo "data is not inserted";
	  }
	  }
	?>
