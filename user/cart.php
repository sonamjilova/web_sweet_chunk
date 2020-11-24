<?php
include("header.php");
?>

<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;">Category</a>
				<ul>
				<li style="display:block;"><a href="non_egg.php" style="border:none;">Non-egg</a></li>
				<li style="display:block;"><a href="egg.php" style="border:none;">Egg</a></li>
				</ul>
				</li>
				<li ><a href="cart.php" style="border:none;" class="active">Cart</a></li>
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
		</header>
<div id="body" style="margin-top:-60px;">
<br>
<br>
<br>
		<br>
			<br>
			<div id="container" style="border:none;">
			<table id="table">
			<thead>
			 <tr>
			 <th>
			 SNO
			 </th>
			 <th>
			 NAME
			 </th>
			 <th>
			 IMAGE
			 </th>
			 <th>
			 PRICE
			 </th>
			 <th>
			 QUANTITY
			 </th>
			 
			 <th>
			 TOTAL
			 </th>
			 <th>
			 CHANGE
			 </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			$total=0;
			 $bill=0;
			 $sno=1;
			//echo "helll";
			 foreach($_SESSION as $product)
			 {  
			 if(!(isset($_SESSION['uname'])))
				 {
						
			     $price=0;
				 echo "<tr>";
				 echo "<form action='removecart.php' method='post'>";
				 echo "<td>".($sno++)."</td>";
				 foreach($product as $key => $value)
				 {
					 if($key==0)
					 {
						 $name=$value;
						 echo "<td style='text-transform:uppercase;'>".$value."</td>";
						 echo "<input type='hidden' name='name' value= '".$value."'>";
					 }
					 if($key==1)
					 { 
				     // echo $value;
						 echo "<td><img src='cakes/".$value."'></td>";
						 echo "<input type='hidden' name='image' value= '".$value."'>";
					 }
				  if($key==2)
					 {
						 $price=$value;
						 echo "<td>Rs.".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
					 }
					if($key==3)
					 {// $quantity=$value;
						//$value=1;
                            echo "<td>";
							?>
							<select onChange="window.location='cart.php?product='+this.value+'& name1=<?php echo $name; ?>'">;
							<?php
							$name1="";
							$quantity=$value;							
							if(isset($_GET['name1'])){
							
							$name1=$_GET['name1'];
							if($name1===$name)
								$value=$_GET['product'];
							}
							// echo "<select onChange='window.location='ban.php?product='+this.value'>";
						 echo "<option value='$value'>$value</option>";
                             echo "<option value='1'>1</option>";
                               echo "<option value='2'>2</option>";
							   echo "<option value='3'>3</option>";
							   echo "<option value='4'>4</option>";
							   echo "<option value='5'>5</option>";
							   echo "<option value='6'>6</option>";
                               echo "<option value='7'>7</option>";
							   echo "<option value='8'>8</option>";
							   echo "<option value='9'>9</option>";
							   echo "<option value='10'>10</option>";
                            echo "</select>";
							echo "</td>";
							//if(isset($_GET['name1']))
							//echo "<td>".$_GET['name1']."</td>";
						///	
						// echo "<td>".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
						 if($name1===$name){
						 $quantity=$value;
					    $_SESSION[$name1][$key]=$value;
						 }
					 }
				 }
				          
						 $bill=$quantity*$price;
						 $total=$total+$bill;
						 //echo "<td>".$quantity."</td>";
						 echo "<td>".$bill."</td>";
						 echo "<td><input type='submit' id='remove' name='remove' value= 'Remove'></td>";
					 
				         echo "</form>";
				          echo "</tr>";
				 }
						  
			     else if($product!=$_SESSION['uname']){
			     $price=0;
				 echo "<tr>";
				 echo "<form action='removecart.php' method='post'>";
				 echo "<td>".($sno++)."</td>";
				 foreach($product as $key => $value)
				 {
					 if($key==0)
					 {
						 $name=$value;
						 echo "<td style='text-transform:uppercase;'>".$value."</td>";
						 echo "<input type='hidden' name='name' value= '".$value."'>";
					 }
					 if($key==1)
					 { 
				     // echo $value;
						 echo "<td><img src='cakes/".$value."'></td>";
						 echo "<input type='hidden' name='image' value= '".$value."'>";
					 }
				  if($key==2)
					 {
						 $price=$value;
						 echo "<td>Rs.".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
					 }
					 if($key==3)
					 {
						// $quantity=$value;
						//$value=1;
                            echo "<td>";
							?>
							<select onChange="window.location='cart.php?product='+this.value+'& name1=<?php echo $name; ?>'">;
							<?php
							$name1="";
							$quantity=$value;							
							if(isset($_GET['name1'])){
							
							$name1=$_GET['name1'];
							if($name1===$name)
								$value=$_GET['product'];
							}
							// echo "<select onChange='window.location='ban.php?product='+this.value'>";
						 echo "<option value='$value'>$value</option>";
                             echo "<option value='1'>1</option>";
                               echo "<option value='2'>2</option>";
							   echo "<option value='3'>3</option>";
							   echo "<option value='4'>4</option>";
							   echo "<option value='5'>5</option>";
							   echo "<option value='6'>6</option>";
                               echo "<option value='7'>7</option>";
							   echo "<option value='8'>8</option>";
							   echo "<option value='9'>9</option>";
							   echo "<option value='10'>10</option>";
                            echo "</select>";
							echo "</td>";
							//if(isset($_GET['name1']))
							//echo "<td>".$_GET['name1']."</td>";
						///	
						// echo "<td>".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
						 if($name1===$name){
						 $quantity=$value;
					    $_SESSION[$name1][$key]=$value;
						 }
					 }
					
				 }
				         
						 $bill=$quantity*$price;
						 $total=$total+$bill;
						// echo "<td>".$quantity."</td>";
						 echo "<td>".$bill."</td>";
						 echo "<td><input type='submit' id='remove' name='remove' value= 'Remove'></td>";
					 
				         echo "</form>";
				          echo "</tr>";
				 }
						  
			 }
			 if($sno>1)
			 echo "<tr><td style='border:none;text-align:right' colspan='5'>Total price</td><td style='border:none;'>$total</td><td style='border:none;'><a id='proceed-btn' href='proceed&checkout.php'>Procedd and Checkout</a></td></tr>"
			?>
			</tbody>
			</table>
			</div>
			
		<br>
			<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>
		
<?php include("footer.php") ?>

															