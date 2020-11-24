<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta neme="viewport" content="width-device-width, initial-scale.0">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="HOME.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<link rel="stylesheet" type="text/css" href="registration_main.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript" src="menu-stick.js"></script>
	<script src="jquery.js"></script>
		
	<?php
   session_start();
  if(isset($_SESSION['uname']))
   {
	   function show()
	   {
		   echo "Welcome".$_SESSION['uname'];
	   }
   }
   else
  {
	   ?>
				 <script>
		location.replace("../user/index.php");
		</script>
				<?php
				 
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
						   	<li><span id="welcome" style="border-right: 1px solid white; margint-left:-100px;color:white;" class="login">
							<?php 
							  if(isset($_SESSION['uname']))
							show();
						?></span></li>
						   <li><span id="logout"><a href="../user/logout.php" class="login">Logout</a></span></li>
					</ul>
					</div>
					</div>
					
		</div>
		
