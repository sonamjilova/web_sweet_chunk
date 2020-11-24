<?php
include("dbconnect.php");
if(isset($_POST['submit']))
			  {
				  $name=$_POST['name'];
				  $price=$_POST['price'];
				  $discount=$_POST['discount'];
				  $status=$_POST['status'];
			  }
			  if($con)
			  {
				//  UPDATE `produc1` SET `id`=[value-1],`name`=[value-2],`image`=[value-3],`price`=[value-4],`discount`=[value-5],`cid`=[value-6],`STATUS`=[value-7] WHERE 1
                $query="update produc1 set name='$name', price='$price', discount='$discount', status='$status' where name='$name'";
				$run=mysqli_query($con,$query);
			
				if($run==='1')
					?>
				  <script type="text/javascript">
				   alert("Record is updated!!!");
				   window.location.replace("product.php");
				  </script>
				<?php
				
			  }
			  
?>
