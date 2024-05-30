<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sky Blue Luxury Hotel</title>
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
	<center>
		<div class="header_button">
		<button  type="button" id="butt1" ><a id="log_changer" href="login.php" class="butt-a">Log in</a></button><br>
		<button  type="button" id="butt2" ><a id="page_changer" href="registration form.html" class="butt-a">Sign up</a></button>
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
<!--slideshow-->
<div class="slideshow-container">
	<div class="mySlides fade">
		 <img src="images/Home/s1.jpg" style="width:100%;height:300px ">
	</div>
	<div class="mySlides fade">
		 <img src="images/Home/s2.jpg" style="width:100%;height:300px">
	</div>
	<div class="mySlides fade">
		<img src="images/Home/s3.jpg" style="width:100%;height:300px">
    </div>
    <div class="mySlides fade">
		<img src="images/Home/s4.jpg" style="width:100%;height:300px">
    </div>
	<div class="mySlides fade">
		<img src="images/Home/s5.jpg" style="width:100%;height:300px">
    </div>
    <div class="mySlides fade">
		<img src="images/Home/s6.jpg" style="width:100%;height:300px">
    </div>
	<div class="mySlides fade">
		<img src="images/Home/s7.jpeg" style="width:100%;height:300px">
    </div>
    <div class="mySlides fade">
		<img src="images/Home/s8.jpg" style="width:100%;height:300px">
    </div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span> 
  <span class="dot"></span>  
</div>
<p class = "welcome">
	Welcome to our hotel reservation website, your gateway to an extraordinary travel experience! Whether you're planning a relaxing getaway, an adventurous escapade, or a business trip, 
	we are here to make your stay exceptional. With a wide selection of luxurious accommodations, from cozy rooms to lavish suites, we cater to every traveler's needs and preferences.
	Our user-friendly platform ensures a seamless booking process, allowing you to effortlessly browse through various options and secure your perfect room with just a few clicks.
	Our dedicated team of hospitality experts is committed to providing personalized service and ensuring your comfort and satisfaction throughout your stay. 
	Get ready to embark on a memorable journey and unlock a world of hospitality excellence with us. Welcome to a world-class hospitality experience!
</p>
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

<script>
	let slideIndex = 0;
	showSlides();
	
	function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 4000); // Change image 
	}
</script>
</body>
</html>