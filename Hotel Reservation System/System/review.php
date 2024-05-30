<?php
	include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sky Blue Luxury Hotel</title>
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
	<h1 color="white"><u>Reviews</u></h1>

	<table>
	<tr>
		<th>Name</th>
		<th>Rating</th>
		<th>Comment</th>
		<th>Reply</th>
		<th>Delete</th>
		
	</tr>
	<?php
		$sql="SELECT * FROM review";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
				{
					
					
					echo "<tr><td>".$row["R_name"]."</td><td>".$row["R_rate"]."</td><td>".$row["R_comment"]."</td>";
					echo"<td>".$row["M_feedback"]."<br><button class='tablebut'><a href='reply.php? rid=$row[R_id] &name=$row[R_name] 
					&rate=$row[R_rate] &com=$row[R_comment] &reply=$row[M_feedback]' class='a-line'>Reply</a></button></td>";
					echo"<td><button class='tablebut'><a href='reviewdelete.php?rid=$row[R_id]' class='a-line'>Delete</a></button></td></tr>";
					
					
				}
				
		}else{
			echo"<tr><td></td><td></td><td>empty</td><td></td><td></td></tr>";
		}
  ?>
	</table><br>
	<button class="back"><a href="mpage.php" class="a-line">Back</a></button>
	</center>
	
<footer>
</footer>
</body>
</html>