<?php
    session_start();
    include_once'config.php'; //link with config.php
	if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST["mail"];
        $password=$_POST["psw"];
		
		$sql="SELECT * FROM tourists WHERE Email='$email' && Password='$password'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['Email']===$email&& $row['Password']===$password){
				$_SESSION["UseriD"] = $row['T_id'];
				$_SESSION["User"] = $row['Fname'];
				header("Location:index.php");
			}
		   else
			{
				echo"<script>alert('Your login invalid!')</script>";
				header("Location:login.php");
			}
		}else{
			echo"<script>alert('Your account not found!')</script>";
		}
	}

	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css\styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<div class="body"></div>
<!--Header-->
	<img class="blue" src="images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="images/Home/logo0.png" alt="logo">
	<img class="user" src="images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	<!--button  type="button" id="butt1" onclick=""><a href="" class="butt-a">Log In</a></button><br>
	<button  type="button" id="butt2" onclick=""><a href="" class="butt-a">Sign Up</a></button-->
<!--navigation bar-->
<ul type="none" class="nav">
    <li class="nav-list"><a href="index.php" class="list-a">Home</a></li>
    <li class="nav-list"><a href="accommodation.php" class="list-a">Accommodation</a></li>
    <li class="nav-list"><a href="facilities.php" class="list-a">Facilities</a></li>
    <li class="nav-list"><a href="booking.php" class="list-a">Booking</a></li>
    <li class="nav-list"><a href="about.php" class="list-a">About us</a></li>
    <li class="nav-list"><a href="reviews.php" class="list-a">Reviews</a></li>
    <li class="nav-list"><a href="contact.php" class="list-a">Contact us</a></li>
</ul>
<hr style="border:3px solid black">		
<center>									
<form method="POST" action="" class="log_form" >
	<div class="log_form_text">
		<h2>LOGIN</h2>
		<label for="mail">Email Address</label><br>
		<input type="email" class="log_input" id="mail" name="mail"  placeholder="username@gmail.com" required><br><br>
		<label for="psw">Password</label><br>
		<input type="password" id="pws" name="psw" class="log_input" required><br><br>
		<input type="submit" value="Login" class="log_sub" id = "submitBtn">	
	</div>
</form>
</center>				
<hr>
<!--footer-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="about.php">>about us</a></li>
					<li><a href="#">>privacy policy</a></li>
					<li><a href="#">>Term & Condition</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Contact</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">123 Street,Rathnapura.</a></li>
					<li><a href="#">011-2788856</a></li>
					<li><a href="#">bluesky@gmail.com</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15799.272129499186!2d80.37134780364997!3d6.736016323992659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3beeb373e90c7%3A0xcc578e3f0396185!2sThe%20Royal%20Peak%20Resort!5e0!3m2!1sen!2slk!4v1685886884211!5m2!1sen!2slk"
				 width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>

</footer>
<hr>
</body>
</html>