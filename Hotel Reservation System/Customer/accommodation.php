<?php
	session_start();
?>
<!DOCTYPE html>  
<html>
<head><title>Accommodation</title>
<link rel="stylesheet" href="./css/styles.css">
<script src = "./js/js.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  
  <!--Header-->
  
	<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="./images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	<center>
		<div class="header_button">
		<button  type="button" id="butt1" ><a id="log_changer" href="login.php" class="butt-a">Log In</a></button><br>
		<button  type="button" id="butt2" ><a id="page_changer" href="registration form.html" class="butt-a">Sign Up</a></button>
		<?php
			if(isset($_SESSION["UseriD"])){ //already log
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
  

    <h2 id="ACC1">Accommodation</h2>

	    <div class = "button">
		    <button class="accamodation-butt1" type="button" id="btn1" onclick="Acco_loadData('Abtn1')" checked>Superior Rooms</button>
			<button class="accamodation-butt1" type="button" id="btn2" onclick="Acco_loadData('Abtn2')">Standard Rooms</button>
			<button class="accamodation-butt1" type="button" id="btn3" onclick="Acco_loadData('Abtn3')">Business Executive Rooms</button>
			<button class="accamodation-butt1" type="button" id="btn4" onclick="Acco_loadData('Abtn4')">Eco Rooms</button>
			<button class="accamodation-butt1" type="button" id="btn5" onclick="Acco_loadData('Abtn5')">Camping</button>
			<br><br><br><br><br><br><br><br><br>;
		</div>

	<img id = "accamodationimg1" src = "./images/Accomadation images/AAAAA.jpg" width="34%" height="40.5%">
	<img id = "accamodationimg2" src = "./images/Accomadation images/BBBBB.jpg" width="35%" height="40.5%">
	
	<p class = "accamodationtext1" id = "para1">Welcome to the Sky Blue Hotel, where comfort meets tranquility in the heart of our breathtaking location. 
	                                Our accommodation webpage offers a seamless experience for you to explore and select from our diverse range of room options. 
									Immerse yourself in luxury with our Superior Rooms, where every detail has been carefully crafted to provide you with an unforgettable stay. 
									Alternatively, our Standard Rooms offer a cozy retreat, perfect for those seeking a comfortable and convenient stay. 
									For the eco-conscious traveler, our Eco Rooms provide sustainable amenities without compromising on comfort. 
									And for those craving an outdoor adventure, our Camping options offer a unique experience surrounded by nature's beauty. 
									Browse through the captivating pictures and embark on a journey to find the perfect accommodation that suits your preferences at the Sky Blue Hotel.</p>
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