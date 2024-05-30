<?php
	include_once'config.php'; //link with config.php
?>
<?php
    $id=$_GET['rid'];
	$name=$_GET['name'];
	$rate=$_GET['rate'];
	$com=$_GET['com'];
	$reply=$_GET['reply'];
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
    {
	$reply=$_POST['reply'];
	$query = "UPDATE review SET M_feedback='$reply' WHERE R_id='$id'";
	$data=mysqli_query($conn,$query);
    
	if($data){
		echo"<script>alert('Send')</script>";
		header("Location:review.php");
	}
	else{
    	echo"<script>alert('Not send')</script>";
	}
	}
   

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
	<h1 color="white"><u>Give a feedback</u></h1>
	<form method="Post" class="form" >
		<?php 
			echo"<h3 class='text'>Comment</h3><p class='rep_p'>".$com."</p>";		
		?>
		<textarea name="reply"><?php echo $reply?></textarea><br><br>
		<input type="submit" name="sub" value="Send" class="btn">
	</form>
	
	
	
	</center>
	
<footer>
</footer>
</body>
</html>