<?php
	include_once'config.php';
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
	<table>
	<tr>
		
            <th>Booking ID</th>
            <th>Room Type</th>
            <th>No. of Rooms</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Status</th>
            <th>TID</th>
			
	</tr>
	<?php
		$sql="SELECT * FROM booking";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr><td>".$row["Booking_id"]."</td><td>".$row["Room_Type"]."</td><td>".$row["NoOfRooms"]."</td><td>".$row["Check_In_Date"]
					."</td><td>".$row["Check_Out_Date"]."</td><td>".$row["Status"]."<br><button class='tablebut'><a href='check.php?bid=$row[Booking_id] &pen=$row[Status]' class='a-line'>Update</a></button></td><td>".$row["T_id"]."</td></tr>";
				}
		}else{
			echo"<tr><td>empty row</td></tr>";
		}
  ?>
	</table>
	<br>
	<button class="back"><a href="rpage.php" class='a-line'>Back</a></button>
	</center>
	
	
<footer>
</footer>
</body>
</html>