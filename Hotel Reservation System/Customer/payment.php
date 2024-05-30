<?php
    include_once'config.php';
?>
<?php
	session_start();
?>
<?php
if(isset($_POST['submit'])){
    $bid = $_POST["b_id"];
    $mail = $_POST["email"];
    $acc_name = $_POST["a_name"];
	$acc_num = $_POST["a_num"];
	$p_date = $_POST["pdate"];
	$p_amount = $_POST["pamount"];
	
	$sql="INSERT INTO
	payment(Booking_id,Email,P_id,Account_holder_name,Account_No,Pay_date,Pay_amount) VALUES('$bid','$mail','','$acc_name','$acc_num','$p_date','$p_amount')";
	
	if(mysqli_query($conn,$sql))
	{
		header("Location:payDone.php");
	}else
	{
		echo"<script>alert('Payment failed!')</script>";
	}
	
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head><title>Registration Form</title>
<script src="./js/index.js"></script>
<link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="./images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	<center>
		<div class="header_button">
		<button  type="button" id="butt1" ><a id="log_changer" href="login.php" class="butt-a">Log In</a></button><br>
		<button  type="button" id="butt2" ><a id="page_changer" href="registration form.html" class="butt-a">Sign Up</a></button>
		
		<?php
			if(isset($_SESSION["UseriD"])){
				echo"<script>
					var log = document.querySelector('#log_changer');
					var account = document.querySelector('#page_changer');
		
					log.innerHTML='Log out';
					log.setAttribute('href','logout.php');
		
					account.innerHTML='User';
					account.setAttribute('href','user.php');
				</script>";}
			?>
			</div>
			</center>

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
	    <form action="" class = "payment-form" method="POST">
		
		<h2 id="t3"> Pay With Debit/Credit Card</h2>
		<div>
		<label class="paynow paynow-des1">Booking ID :</label>
		<input type="text" name="b_id" required>
		</div>
		<br>
		
		<div>
		<label class="paynow paynow-des1">Email :</label>
		<input type="text" name="email" required>
		</div>
		<br>
		
		<hr>
		
		<br>
		<div>
		<label class="paynow paynow-des2">Account holder name </label>
		<input type="text"  placeholder="enter name here" name ="a_name" required>
		</div><br>
		
		<div>
		<label class="paynow paynow-des2">Card Number </label>
		<input type="text" placeholder="enter card number here" name="a_num" required>
		</div><br>
		
		<div>
		<label class="paynow paynow-des1">Payment Date </label>
		<input type="date" placeholder="enter date here" name="pdate" required>
		</div><br>
		
		<div>
		<label class="paynow paynow-des2">Pay Amount </label>
		<input type="text" placeholder="$" name="pamount" required>
		</div><br>
		
		<input type="submit" value="Pay Now" class="sub-pay" id="sub-paid" name="submit">
		
		</form>

	</center>
	
	
	
	
	<br>
		<hr class ="hr">
<!--footer-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="#">>about us</a></li>
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