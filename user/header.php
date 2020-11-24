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
	<link rel="stylesheet" type="text/css" href="cartbody.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script src="jquery.js"></script>
		<script type="text/javascript" src="menustick.js"></script>
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
<body style="padding:0;margin-top:-25px;">
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
		
