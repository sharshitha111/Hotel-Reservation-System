<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Facilities</title>
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

    <h2 id="t1">Facilities</h2>

	    <div class = "button">
		    <button class="bttn1" type="button" id="btn6" onclick="loadData('btn1')" checked>Food & Beverage</button>
			<button class="bttn1" type="button" id="btn1" onclick="loadData('btn2')">Adventure Park</button>
			<button class="bttn1" type="button" id="btn2" onclick="loadData('btn3')">Swimming Pool</button>
			<button class="bttn1" type="button" id="btn3" onclick="loadData('btn4')">Boat Riding</button>
			<button class="bttn1" type="button" id="btn4" onclick="loadData('btn5')">Play Grounds</button>
		    <button class="bttn1" type="button" id="btn5" onclick="loadData('btn6')">Children Play Area</button>
			<button class="bttn1" type="button" id="btn7" onclick="loadData('btn7')">Car Park</button>
			<button class="bttn1" type="button" id="btn8" onclick="loadData('btn8')">Tree Houses</button>
			<button class="bttn1" type="button" id="btn9" onclick="loadData('btn9')">Museum</button><br><br><br><br>
		</div>
	
	<img id = "img1" src = "./images/Facilities/all1.jpg" width="33%" height="55.5%">
	<img id = "img2" src = "./images/Facilities/all2.jpg" width="33%" height="27%">
	<img id = "img3" src = "./images/Facilities/all3.jpg" width="33%" height="27%">
	<img id = "img5" width="33%" height="55.55%">
	<p class = "text1" id = "para1">Our Sri Lankan hotel offers a wide range of exceptional facilities that cater to every guest's desires. Delight in an array of delectable dining options, where our 
	                                skilled chefs create culinary wonders showcasing the best of local and international cuisine. For thrill-seekers, our adventure park offers exciting activities to 
									get your adrenaline pumping. Take a refreshing dip in our sparkling swimming pool or enjoy a leisurely boat ride on the nearby serene lake. Our hotel also boasts a 
									well-equipped playground and children's play area, ensuring endless fun for our younger guests. With ample car parking available, convenience is guaranteed. 
									For a truly unique experience, stay in our enchanting tree houses nestled amidst lush greenery. Lastly, immerse yourself in the rich cultural heritage of Sri Lanka 
									with a visit to our on-site museum, showcasing captivating artifacts and stories</p>

<hr class ="hr">
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