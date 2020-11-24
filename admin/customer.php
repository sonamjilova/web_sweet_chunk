<?php include("dbconnect.php");?>
<?php include("header.php"); ?>
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="home.php" style="border:none;">Home</a></li>
				<li><a href="product.php" style="border:none;">Product</a></li>
				<li><a href="customer.php" style="border:none;" class="active">Customer</a></li>
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
				<li><a href="product.php" style="border:none;">Product</a></li>
				<li><a href="customer.php" style="border:none;" class="active">Customer</a></li>
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
<div id="body" style="padding:0; margin-top:-62px;">
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
			 FNAME
			 </th>
			
			 <th>
			 LNAME
			 </th>
			 <th>
			 EMAIL
			 </th>
			 <th>
			  USERID
			 </th>
			 <th>
			  CONTACT
			 </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			                  
             //   $query = 'SELECT a.`product_id`, a.`product_name`, sum(a.`quantity`) as quantity,sum(a.`available`) as available, a.`price`, a.`profit`,a.`selling_price`,a.`date_in`,d.`category`,b.`supplier_name`,concat(c.`fname`," ",c.`lname`)as name,a.`product_code`,a.`status`FROM `tblproducts`a,`tblsupplier`b,`tblusers`c,`tblcategory`d WHERE a.`supplier_id` = b.`supplier_id` AND a.`user_id` = c.`user_id` AND a.`category_id` = d.`category_id` GROUP BY a.`product_code`';
               //     $result = mysqli_query($db, $query) or die (mysqli_error($db));
                       $query ="select r.fname  , r.lname, r.email ,r.uname, c.contact from registration r , contact c where r.email=c.email and status='user'";
			       $result=mysqli_query($con,$query);
                    $sno=0;
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo "<tr><form action='update.php' method='post'>";
							echo '<td>'.++$sno.'</td>';
                            echo '<td>'. $row['fname'].'</td>';
                               echo '<td>'. $row['lname'].'</td>';
							   
								echo '<td>'. $row['email'].'</td>';
							    echo '<td>'. $row['uname'].'</td>';
								echo '<td>'. $row['contact'].'</td>';
                           echo '</tr> </form> ';
						}
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
		  <br>
		 <br>
		 <br>
		</div>
		


<?php
include("footer.php");
?>
