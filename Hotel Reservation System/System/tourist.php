<?php
	include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tourist Information</title>
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
	<h1 color="white"><u>Tourist Information</u></h1>
	<table>
	<tr>
		<th>T_id</th>
		<th>Fname</th>
		<th>Lname</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Country</th>
		<th>PassportNo</th>
		<th>Email</th>
		<th>Phone</th>
	</tr>
	<?php
		$sql="SELECT * FROM tourists";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
				{
					
					echo "<tr><td>".$row["T_id"]."</td><td>".$row["Fname"]."</td><td>".$row["Lname"]."</td><td>".$row["DOB"]
					."</td><td>".$row["Gender"]."</td><td>".$row["Country"]."</td><td>".$row["PassportNo"]."</td><td>"
					.$row["Email"]."</td><td>".$row["Phone"]."</td></tr>";
					
				}
		}else{
			echo"<tr><td>empty row</td></tr>";
		}
  ?>
	</table>
	</center>
	
<footer>
</footer>
</body>
</html>