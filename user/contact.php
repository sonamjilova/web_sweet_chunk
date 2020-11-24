<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta neme="viewport" content="width-device-width, initial-scale.0">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript" src="menustick.js"></script>
	<script src="jquery.js"></script>
	<?php
   session_start();
  if(isset($_SESSION['uname']))
   {
	   ?>
	   <script>
	     $(document).ready(function(){
			// alert();
			$("#sign").css("display","none");
			$("#login").css("display","none");
			$("#logout").css("display","inline");
			$("#welcome").css("display","inline");
		 })
	   </script>
	   <?php
	   function show()
	   {
		   echo "Welcome".$_SESSION['uname'];
	   }
   }

?>
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
						    	<li><span id="welcome" style="border-right: 1px solid white; margint-left:-100px;display:none;color:white;" class="login">
							<?php
							  if(isset($_SESSION['uname']))
							show();
						?></span></li>
						   <li><span id="logout" style="display:none"><a href="logout.php" class="login">Logout</a></span></li>
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
				<li class="current"><a href="about.php" style="border:none;">AboutUs</a></li>
		         <li ><a href="contact.php" style="border:none;" class="active">ContactUs</a></li>
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
				<li class="current"><a href="about.php" style="border:none;" class="active">AboutUs</a></li>
		         <li ><a href="contact.php" style="border:none;">ContactUs</a></li>
			</ul>
			</div>
		</nav>
		</header>

<div id="body" style="height:500px; margin-top:-60px;" >
			<section id="contact-section">
	<div class="container">
	<br>
	<br>
	<br>
		<h2>Contact Us</h2>
		<br>
		<p style=" width: 960px">We are always ready to serve you</p>
		<div class="contact-form" style="margin-left:10%;">
			<!-- first grid section-->
			<div>
				<i class="fa fa-map-marker"></i><span class="form-info">NIT Karnatka</span><br>
				<i class="fa fa-phone"></i><span class="form-info">Phone +919729694333</span><br>
				<i class="fa fa-envelope"></i><span class="form-info">our_team@gmail.com</span><br>
			</div>
			<!--secong grid-->
			<div>
				<form action="contactemail.php" method="post">
					<input type="text" name="name1"  placeholder="Your Name" required>
					<input type="Email" name="email" placeholder="Email" required>
					<input type="text"  name="subject"  placeholder="Subject for this message" required>
					<textarea name="message" placeholder="message" row="5" id="" required></textarea>
					<input type="submit" name="submit" class="submit" value="Send Message">
				</form>
			</div>
		</div>
	</div>
</section>
		</div>
<?php
include("footer.php");
?>
