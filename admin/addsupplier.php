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
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<script type="text/javascript" src="menustick.js"></script>
	<script src="jquery.js"></script>
	<script type="text/javascript" src="menu-stick.js"></script>
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
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="home.php" style="border:none;">Home</a></li>
				<li><a href="product.php" style="border:none;" >Product</a></li>
				<li><a href="customer.php" style="border:none;">Customer</a></li>
				<li ><a href="supplier.php" style="border:none;" class="active">Supplier</a></li>
				<li ><a href="Admin.php" style="border:none;">Admin</a></li>
				<li ><a href="contact.php" style="border:none;">Contact Us</a></li>
				<!--<li class="current"><a href="transaction.php" style="border:none;">Transaction</a></li>
		       -->
				</li>
				
			</ul>
			</div>
		</nav>
		<nav id="hiddenmenu" style="z-index:200;">
		<div class="hiddenmenu">
	<div id="logo" class="logo" style="float: left; width: 600px;">
						<img style="height:100px; width:200px;" src="images/logo_sweet_chunk1.png">
					</div>
			<ul>
				<li><a href="home.php" style="border:none;">Home</a></li>
				<li><a href="product.php" style="border:none;" >Product</a></li>
				<li><a href="customer.php" style="border:none;">Customer</a></li>
				<li ><a href="supplier.php" style="border:none;" class="active">Supplier</a></li>
				<li ><a href="Admin.php" style="border:none;">Admin</a></li>
				<li ><a href="contact.php" style="border:none;">Contact Us</a></li>
				<!--<li class="current"><a href="transaction.php" style="border:none;">Transaction</a></li>
		       -->
			</ul>
			</div>
		</nav>
		</header>

		
<div id="body" style="margin-top:-60px;height:500px;" >
			<section id="contact-section">
	<div class="container">
	<br>
	<br>
	<br>
		<h2>ADD-SUPPLIER</h2>
		<br>
		
		<div class="contact-form" style="padding-left:350px; text-align:center;">
			
			<!--secong grid-->
			
			<div>
				<form action="addsupplier.php" method="post">
				 <i style=" margin-left:-55%; color:#b13c68;">SUPPLIER-ID</i>
					 <br>
					<input type="text" name="SID" required>
					 <br>
				  <i style=" margin-left:-65%; color:#b13c68;">Name</i>
				  <br>
					<input type="text" name="name"   required>
					<br>
					 <i style=" margin-left:-60%; color:#b13c68;">CONTACT</i>
					 <br>
					<input type="text" name="contact"  required>
					<br>
					 <i style=" margin-left:-62%; color:#b13c68;">EMAIL</i>
					 <br>
					<input type="email" name="email" required>
					 <br>
					<input type="submit" name="submit" class="submit" value="ADD SUPPLIER">
				</form>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div>
	<br>
				<br>
				<br>
</section>
		</div>
		
<?php
include("footer.php");
?>
<?php
include("dbconnect.php");
if(isset($_POST['submit']))
			  {
				  $name=$_POST['name'];
				 
				  $sid=$_POST['SID'];
				  $email=$_POST['email'];
				  $contact=$_POST['contact'];
			
			  
			 if($con)
			  {
					$query="insert into supplier values('$sid','$name','$contact','$email')";
				$run=mysqli_query($con,$query);
			
				if($run==='1')
					?>
				  <script type="text/javascript">
				   alert("SUPPLIER is added !!!");
				   window.location.replace("supplier.php");
				  </script>
				<?php
				
			  }
			  }
			  
?>
