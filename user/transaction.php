<html> 
<head> </head>
<body>
<script type="text/javascript"> 
alert("Your order is placed and it will delivered soon");

//

//window.location.replace("http://stackoverflow.com");sss
</script>
<?php
include("dbconnect.php");
//if($con)
	$name =$_POST["name"];
     $email =$_POST["email1"];
	 $address=$_POST["address"];
	 $city=$_POST["city"];
	 $state=$_POST["state"];
	 $zip=$_POST["zip"];
	// echo $name." ".$email." ".$address." ".$city." ".$state." ".$zip;
	$total=0;
			 $bill=0;
			 $sno=1;
			//echo "helll";
			$sno=0;
			session_start();
			 foreach($_SESSION as $product)
			 {  	  
			      if($product!=$_SESSION['uname'])
				  {
			       $price =0;
				    $sno++;
				   foreach($product as $key => $value)
				   {
					   
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
				  // echo "<b>Rs. ".$bill."</b></p>";
				 
				    }
			 
			 }
			
			
	 if($con)
	 {
		// `email`, `address`, `city`, `state`, `zip
		date_default_timezone_set("Asia/Calcutta");
 $date1= date("y/m/d");
 $time1= date("h:i:sa");
		 $query1="Insert into address_details values('$email','$address','$city','$state','$zip')";
		 $query2="Insert into transaction values('$email','$date1','$time1','$total')";
	     $run1=mysqli_query($con,$query1);
		 $run2=mysqli_query($con,$query2);
		 if($run1&&$run2)
		 {
		//	 session_start();
			 
			  foreach($_SESSION as $product)
			 {  	  
			      if($product!=$_SESSION['uname'])
				  {
				   foreach($product as $key => $value)
				   {
					   if($key==0)
					   {
						   unset($_SESSION[$value]);
						  // echo "<p><span style='float:left;display:block; width:200px; text-decoration:none;border:none'>".$sno." ".$value."</span> ";
					   }
					  						
				   }
				   
				    }
			 
			 }
		   ?>
		   <script type="text/javascript">
		   window.location.replace("index.php");
		   </script>
		   <?php
		 }
	 }
?>

 </body>
</html>