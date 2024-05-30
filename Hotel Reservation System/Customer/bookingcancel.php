<?php
	include_once'config.php';
	session_start();
?>
<?php
	$rid=$_GET['id'];
	
	$query="DELETE from booking WHERE Booking_id='$rid'";
		if(mysqli_query($conn,$query)) //predefine func.. for execute query -> mysqli_query(link,query)
		{
			echo"<script>alert('Booking Canceled!')</script>";
			header("Location:booking.php");
		}else
		{
			echo"<script>alert('Canceling failed!')</script>";
		}
	
?>