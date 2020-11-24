<?php
include("header.php");
?>
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
				<li ><a href="feedback.php" style="border:none;" class="active">Feedback</a></li>
				<li class="current"><a href="about.php" style="border:none;" >AboutUs</a></li>
		         <li ><a href="contact.php" style="border:none;">ContactUs</a></li>
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
<div id="body" style="margin-top:-60px;">

		<form align="center" action="feedback.php" method="post" style="margin:20px 20px;font-family: :Arial, Helvetica, sans-serif; font-size: 17px;">

		<br>
	<h1 style="color:#b13c68;">Feedback</h1>
	<br>
<textarea name="feedback" rows="20" cols="150" placeholder="Enter your feedback" style="padding:10px 10px;"></textarea>
	<br>
	<br>
	<br>
<input type="submit" name="submit" value="submit" class="btn" style="width:100px">
</form>
		</div>
<?php
include("footer.php");
if(isset($_POST["submit"]))
{
     // session_start();
	  if(!isset($_SESSION["uname"]))
	  {
       header("Location:login.php");
	  }
	  else{
           date_default_timezone_set("Asia/Calcutta");

	        $fd=$_POST["feedback"];
	        $date1= date("y/m/d");
	        $time1=date("h:i:sa");
	        include("dbconnect.php");
	        if($con)
	        {
				$query ="Select * from registration where uname='".$_SESSION['uname']."'";
								$run=mysqli_query($con,$query);
								$num=mysqli_num_rows($run);
								//echo $num;
								if($num>0)
								{
								  $data=mysqli_fetch_assoc($run);
								   $fname=$data['FNAME'];
								   $lname=$data['LNAME'];
								   $email=$data['EMAIL'];
								}
								//echo $email;
	         $query1="insert into feedback values('$email','$fd','$date1','$time1')";
			 $run=mysqli_query($con,$query1);
			 if($run)
			 {
				 ?>
				 <script type="text/javascript">
				    alert("Your feedback is added");
				 </script>
				 <?php
			 }
	         }
	  }
}
?>
