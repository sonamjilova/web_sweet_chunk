<?php
  session_start();
  if(isset($_SESSION['uname']))
	  header('location:index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="registration1.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
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
						   <li><span id="logout" style="display:none"><a href="logout.php">Log out</a></span></li>
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
		<div id="body" style="margin-top:-60px;">
			<div id="body-align" style=" margin: 0 auto;">
				<div class="title"><h1 style="color:#b13c68;">LogIn</h1></div>
<div class="container">
	<div class="left"></div>
	<div class="right">
		<div class="formBox">
			<form action="login.php" method="post">
				<p>Email</p>
              <input type="text" name="name" placeholder="Enter ur name">
              <p>Password</p>
              <input type="password" name="password" placeholder="*****">
              <br>
              <input type="submit" name="submit" value="Sing in">
              <br>
              <a href="#">Forget Password</a>
              <a href="index.php" style=" margin-left:50%;">Home</a>
			</form>
		</div>
	</div>
</div>
			</div>

		</div>
		<p style="color:white;height:10px;"></p>

<?php include("footer.php");?>
<?php
  if(isset($_POST["submit"]))
  {
	  	 include("dbconnect.php");
	  $email =$_POST["name"];
	  $password=$_POST["password"];
	  if($con)
	  {

		  $query="select * from registration where email='$email' AND password='$password'";
		  $run=mysqli_query($con,$query);
		  $num=mysqli_num_rows($run);

		  if($num>0)
		  {
			$data=mysqli_fetch_assoc($run);

			$uname=$data['UNAME'];
			$status=$data['status'];

		  //echo $uname;
             //ssession_start();

             $_SESSION['uname']=$uname;
             if($status==='user')
			 {

				 ?>
				 <script>
		location.replace("index.php");
		</script>
				<?php
			 }
             else if($status==='admin')
			 {
				  ?>
				 <script>
		location.replace("../admin/home.php");
		</script>
				<?php

			 }


		  }
		  else
		  {
			?>
		<script>
		alert("email id or password missmatch");
		window.open("login.php","_self");
		</script>
		<?php
	   }
	  }
      else
		  echo "not";
  }
?>
