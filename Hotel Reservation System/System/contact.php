<?php
	include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
	<h1 color="white"><u>Messages</u></h1>
	<table>
	<tr>
		<th>C_id</th>
		<th>Name</th>
		<th>Mail</th>
		<th>Country</th>
		<th>Subject</th>
		<th>Message</th>
	</tr>
	<?php
		$sql="SELECT * FROM contact_us";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
				{
					
					echo "<tr><td>".$row["C_id"]."</td><td>".$row["Customer_full_name"]."</td><td>".$row["Customer_email"]."</td><td>".$row["Customer_country"]
					."</td><td>".$row["Customer_subject"]."</td><td>".$row["Customer_message"]."</td></tr>";
					
				}
		}else{
			echo"<tr><td>empty</tr>";
		}
  ?>
	</table>
	</center>
	
<footer>
</footer>
</body>
</html>