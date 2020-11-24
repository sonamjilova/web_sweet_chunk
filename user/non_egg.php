<?php
include("header.php");
?>
<!-- menu -->
<!-- menu -->
<nav id="menu">
<div class="menu">
			<ul>
				<li><a href="index.php" style="border:none;">Home</a></li>
				<li><a href="#" style="border:none;" class="active">Category</a>
				<ul>
				<li style="display:block;"><a href="non_egg.php" style="border:none;">Egg_less</a></li>
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
		</header>
<!-- body -->
<div id="body" style="padding:0; margin-top:-60px;">
<br>
<br>
			<div id="container">

			<?php
			  include("dbconnect.php");
			  //if($con)
				  $query ="select * from produc1 where cid = 2 AND STATUS=1";
			       $run=mysqli_query($con,$query);
				   $num=mysqli_num_rows($run);
				   if($num>0)
				   {
					   while($data=mysqli_fetch_assoc($run))
					   {
						   ?>
						   <form method="post" action="insertcart.php">
						   <ul>
						   <li>
						   <section class="title"><?php
						   echo $data['name'];
						   ?>
						   </section>
						    <figure class="img">
							<img src="cakes/<?php
							 echo $data['image']
							?>">
							</figure>
							<section>
							<h3 class="price">
							<span style="margin-left:20px;">
							Rs.<?php
                             $val =$data['price'];
							 $dis=$data['discount'];
							 $realdis=($val*$dis)/100;
							 $act=$val-$realdis;
							 echo $act;
    					    ?> </span>
							<span style="margin-left:35%;text-decoration:line-through;color:#5b5c5e"><?php
                            echo "Rs ".$val;
    					?></span>
						<span"><?php
                            echo $dis;
    					?>%OFF</span>
						</h3>
							</section>
							<section id="button">
							<input type="hidden" name="name" value="<?php echo $data['name'];?>">
							<input type="hidden" name="image" value="<?php echo $data['image'];?>">
							<input type="hidden" name="price" value="<?php echo $act;?>">
							<input type="submit" id="left-button" name="cart" onclick="show()" value="Add Cart">
							<input type="submit" id="right-button" name="buy" value="Buy">
							</section>
						   </li>
						   </ul>
						   </form>
						   <?php
					   }
				   }

			?>

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
