<html>
<head></head>
<body>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
$name=$_POST["name1"];
//$lname=$_POST["lname"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

include("dbconnect.php");
if($con)
{
	date_default_timezone_set("Asia/Calcutta");
 $date1= date("y/m/d");
 $time1= date("h:i:sa");
	$query="insert into  contactus values ('$name','$email','$message','$date1','$time1')";
	mysqli_query($con,$query);
}
///echo $name." ".$lname." ".$email." ".$subject."".$message;
$mailto="atult0752@gmail.com";
$headers="From:".$email;
$txt="You have received an email from".$name."\n\n".$message;
if(mail($mailto,$subject,$txt,$headers));
{
	?>
	<script type="text/javascript">
	alert("email is send successfully");
	window.location.href = "contact.php";
	</script>
	<?php
  
}

}
?>
