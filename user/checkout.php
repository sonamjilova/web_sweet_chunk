<?php
include("header.php");
if(!(isset($_SESSION['uname'])))
{
	header('location:index.php');
}

?>
<?php
include('dbconnect.php');
?>
<!-- menu -->
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none";>Category</a>
				<ul>
				<li style="display:block;"><a href="non_egg.php" style="border:none;">Non-egg</a></li>
				<li style="display:block;"><a href="egg.php" style="border:none;">Egg</a></li>
				</ul>
				</li>
				<li ><a href="cart.php" style="border:none;" >Cart</a></li>
				<li ><a href="feedback.php" style="border:none;" >Feedback</a></li>
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
<!-- body -->
<div id="body" style="margin-top:-60px;">
			<div id="container" style="border:none; padding-top:50px; padding-bottom:50px;">
			 <h2>
    	
    </h2>
    <div class="row">
    	<div class="col-75">
    		<div class="container">
    			<form action="transaction.php" method="post">
    				<div class="row">
    					<div class="col-58">
						<?php
						    if($con)
							{
								$query ="Select * from registration where uname='".$_SESSION['uname']."'";
								$run=mysqli_query($con,$query);
								$num=mysqli_num_rows($run);
								if($num>0)
								{
								  $data=mysqli_fetch_assoc($run);
								   $fname=$data['FNAME'];
								   $lname=$data['LNAME'];
								   $email=$data['EMAIL'];
								}
							}
						?>
    						<h3>Billing Address</h3>
    						<label for="fname"><i class="fa fa-user">Full Name</i></label>
    						<input type="text" id="fname" name="name" value="<?php echo $fname." ".$lname;?>">
    						<label for="email"><i class="fa fa-envelope">Email</i></label>
    						<input type="text" id="email" name="email1" value="<?php echo $email;?>">
    						<label for="addr"><i class="fa fa-address-caed-o">Address</i></label>
    						<input type="text" id="addr" name="address" placeholder="452 W. 15th street ">
    						<label for="city"><i class="fa fa-institution"></i>City</label>
    						<input type="text" id="city" name="city" placeholder="mumbai">
    						<div class="row">
    							<div class="col-50">
    								<label for="state">State</label>
    								<input type="text" id="state" name="state" placeholder="utttar pradesh">
      							</div>
    						
    							<div class="col-50">
    								<label for="state">Zip</label>
    								<input type="text" id="zip" name="zip" placeholder="221404">
    							</div>
    						</div>
    					</div>
    					<div class="col-50">
    						<h3>Payment</h3>
    						<label for="fname">Accepted Card</label>
    						<div class="icon-container">
    							<i class="fa fa-cc-visa"></i>
    							<i class="fa fa-cc-amex" aria-hidden="true"></i>
    							<i class="fa fa-cc-mastercard" style="color:red"></i>
    							<i class="fa fa-cc-discover" style="color:orange"></i>
    						</div>
    						<label for="cname">Name on Card</label>
    						<input type="text" id="cname" name="cardnumber" placeholder="12345">
    						<label for="cnum">Credit Card</label>
    						<input type="text" id="cnum" name="cardnumber" placeholder="1111-2222-3333-4444">
    						<label for="expmonth">Exp month</label>
    						<input type="text" id="expmonth" name="expmonth" placeholder="september">
    						<div class="row">
    							<div class="col-50">
    								<label for="expyear">Exp Year</label>
    								<input type="text" id="expyear" name="expyear" placeholder="2013">
    							</div>
    		              <div class="col-50">
    		              	<label for="cvv">CVV</label>
    		              	<input type="text" name=cvv" placeholder="532">
    		              	
    		              </div>
    						</div>
    					</div>
    				</div>
    				<!--	<input type="checkbox" checked="checked" name="sameadr">Shipping Address same as billing</label> -->
    					<input type="submit" value="Submit Your Order" class="btn">
    			
    			</form>
    		</div>
    	</div>
    	<div class="col-25">
    		<div class="container">
			<h4>Cart<span class="price" style="color: black;"><i class="fa fa-shopping-cart"><b></b></i></span></h4>
			<?php
			$total=0;
			 $bill=0;
			 $sno=1;
			//echo "helll";
			$sno=0;
			 foreach($_SESSION as $product)
			 {  	  
			      if($product!=$_SESSION['uname'])
				  {
			       $price =0;
				    $sno++;
				   foreach($product as $key => $value)
				   {
					   if($key==0)
					   {
						   echo "<p><span style='float:left;display:block; width:200px; text-decoration:none;border:none'>".$sno." ".$value."</span> ";
					   }
					   if($key==2)
					   {
						   $price=$value;
						   //echo "<span class='price'>".$value."</span></p>";
					   }
                        if($key==3)
						{
							$quantity=$value;
						}							
				   }
				   $bill=$quantity*$price;
				   $total=$total+$bill;
				   echo "<b>Rs. ".$bill."</b></p>";
				 
				    }
			 
			 }
			 echo "<br>";
			 echo "<hr>";
			 echo "<p><span class='price' style=' text-align: center; float:left;display:block; width:200px; text-decoration:none;border:none'>Total</span><b>Rs. ".$total."</b></p>";
				 
			?>
    		<!--	
    			<p><a href="#">IPHone</a><span class="price">$1500</span></p>
    			<p><a href="#">Samsung</a><span class="price">$1000</span></p>
    			<p><a href="#">OPPo</a><span class="price">$100</span></p>
    			<p><a href="#">xiaomi</a><span class="price">$500</span></p>
    			<hr>
				-->
				
<!--
    			<p>Total <span class="price" style="color:black"><b>$3900</b></span></p>
    	-->	</div>
    	</div>
    </div>
			</div>
		</div>
<?php
include("footer.php");
?>
<script type="text/javascript">
		function show()
		{
		   alert('Item is added');
				
		}
	</script>
