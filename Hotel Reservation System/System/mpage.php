<?php
	session_start();

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
	<img class="user" src="images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	<center>
		<div class="header_button">
		<button  type="button" id="butt1" ><a id="log_changer" href="mlogin.php" class="butt-a">Log in</a></button><br>
		
		<?php
			if(isset($_SESSION["miD"])){ //already log   
				echo"<script>
					var log = document.querySelector('#log_changer');
		
					log.innerHTML='Log out';
					log.setAttribute('href','logout.php');
		
				</script>";}
			?>
		</div>
	</center>
	<hr style="border:3px solid white">															

<!--navigation bar-->

	<ul type="none" class="nav">
		
		<li class="nav-list"><a href="tourist.php" class="list-a">Tourist Information</a></li>
		<li class="nav-list"><a href="review.php" class="list-a">Reviews</a></li>
		
	</ul>
	
<footer>
</footer>
</body>
</html>