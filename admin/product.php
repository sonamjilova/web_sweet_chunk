<?php include("dbconnect.php");?>
<?php include("header.php"); ?>
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="home.php" style="border:none;">Home</a></li>
				<li><a href="product.php" style="border:none;" class="active">Product</a></li>
				<li><a href="customer.php" style="border:none;">Customer</a></li>
				<li ><a href="supplier.php" style="border:none;">Supplier</a></li>
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
				<li><a href="product.php" style="border:none;" class="active">Product</a></li>
				<li><a href="customer.php" style="border:none;">Customer</a></li>
				<li ><a href="supplier.php" style="border:none;">Supplier</a></li>
				<li ><a href="Admin.php" style="border:none;">Admin</a></li>
				<li ><a href="contact.php" style="border:none;">Contact Us</a></li>
				<!--<li class="current"><a href="transaction.php" style="border:none;">Transaction</a></li>
		       -->
			</ul>
			</div>
		</nav>
		</header>
<!-- body -->
<div id="body" style="padding:0; margin-top:-60px;">
<br>
<br>
<br>
<div id="container" style="border:none;">
			<table id="table">
			<thead>
			<tr style="border:none; padding-bottom:5px;">
			<th colspan="7" style="border:none; padding-bottom:20px;text-align:left;">
			<button type="button" style="width:15%; height:40px;border:none;cursor:pointer; color:white; background-color:#e67716;" class="btn btn-add"  onclick="window.location.href='addproduct.php';">Add product</button>
			</th>
			</tr>
			 <tr>
			 <th>
			 SNO
			 </th>
			 <th> 
			 NAME
			 </th>
			
			 <th>
			 PRICE
			 </th>
			 <th>
			 DISCOUNT
			 </th>
			 <th>SUPPLIER_ID</th>
			 <th>
			 STATUS
			 </th>
			 <th>
			 UPDATE
			 </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			                  
             //   $query = 'SELECT a.`product_id`, a.`product_name`, sum(a.`quantity`) as quantity,sum(a.`available`) as available, a.`price`, a.`profit`,a.`selling_price`,a.`date_in`,d.`category`,b.`supplier_name`,concat(c.`fname`," ",c.`lname`)as name,a.`product_code`,a.`status`FROM `tblproducts`a,`tblsupplier`b,`tblusers`c,`tblcategory`d WHERE a.`supplier_id` = b.`supplier_id` AND a.`user_id` = c.`user_id` AND a.`category_id` = d.`category_id` GROUP BY a.`product_code`';
               //     $result = mysqli_query($db, $query) or die (mysqli_error($db));
                       $query ="select name, price, discount, supplier_id,status from produc1";
			       $result=mysqli_query($con,$query);
                    $sno=0;
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo "<tr><form action='update.php' method='post'>";
							echo '<td>'.++$sno.'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['discount'].'</td>';
							echo '<td>'. $row['supplier_id'].'</td>';
							if($row['status']==='1')
								echo '<td>Available</td>';
							else
								echo '<td>Not Available</td>';
							
                            echo "<input type='hidden' name='name' value='".$row['name']."'>";
                           echo "<input type='hidden' name='price' value='".$row['price']."'>";
                           echo "<input type='hidden' name='discount' value='".$row['discount']."'>";
                           echo "<input type='hidden' name='status' value='".$row['status']."'>";
                           							if($row['status']==='1')
                         echo "<input type='hidden' name='name' value='".$row['name']."'>";
							else
							echo "<input type='hidden' name='name' value='".$row['name']."'>";
						  
							echo '<td><input type="submit" name="submit" style="color:white;" value="update"></td>';
							
                           echo '</tr> </form> ';
						}
			?>
			</tbody>
			</table>
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
