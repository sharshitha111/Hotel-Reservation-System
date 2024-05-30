<?php
	include_once'config.php';
	$bid=$_GET['bid'];
	$pen=$_GET['pen'];
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		$status=$_POST['status'];
		$query = "UPDATE booking SET Status='$status' WHERE Booking_id='$bid'";
		$data=mysqli_query($conn,$query);
		
		if($data){
			header("Location:bookinghandle.php");
		}
		else{
			echo"<script>alert('Not update')</script>";
		}
	}
   

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking Check</title>
	<link rel="stylesheet" href="css\styles.css">
</head>
<body>
<div class="body"></div>
<!--Header-->
	<img class="blue" src="images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="images/Home/logo0.png" alt="logo">
	
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	<hr style="border:3px solid white">															

<!--navigation bar-->

	<center>
	<h1 color="white"><u>Booking Handling</u></h1>
	<form method="post" class="form">
	<h3 class="text">Booking ID :- <?php echo $bid ?></h3>
	<h3 class="text">Checking status</h3>
	<select name="status">
		<option value="<?php echo $pen ?>"><?php echo $pen ?> </option>
        <option value="Available">Available</option>
        <option value="Not available">Not available</option>
		<option value="Payment Successful">Payment Successful</option>
	</select>
	<input type="submit" name="sub" value="Update" class="btn">
	</form>
	</center>
	
	
<footer>
</footer>
</body>
</html>