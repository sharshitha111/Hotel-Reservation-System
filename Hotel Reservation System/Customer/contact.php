<?php
	session_start();
?>
<!DOCTYPE html>  
<html>
<head><title>ContactUS</title>
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
	<form action="contact_us.php" method="post">
        <h1 class="con_h1">Contact Us</h1><br>
        <h2 class="con_h2">Contact by E-mail</h2><h2 class="con_h2_mob">Contact by phone,</h2><br>
        <div class="con_form">
        <table class="con_table" >
            <tr>
                <td>Full Name  </td>
                <td><input type="text" placeholder="Full Name" name="fullname" class="con_input" required oninvalid="this.setCustomValidity('Full Name ?')" oninput="this.setCustomValidity('')"></td>
                <td><h3 class="con_mob_details">Sky Blue Resort</h3></td>
            </tr>

            <tr>
                <td>E-mail Address  </td>
                <td><input type="email" placeholder="E-mail" name="email" class="con_input" required oninvalid="this.setCustomValidity('E-mail ?')" oninput="this.setCustomValidity('')"></td>  
                <td><p class="con_mob_details"><I>TEL  :  +94 011 5654647</I></td>
            </tr>

            <tr>
                <td>Country  </td>
                <td><input type="text" placeholder="Country" name="country" class="con_input" required oninvalid="this.setCustomValidity('country ?')" oninput="this.setCustomValidity('')"></td>
                <td><p class="con_mob_details"><I>FAX  :  +94 011 5654647</I></td>
                    
            </tr>

            <tr>
                <td>Subject  </td>
                <td><input type="text" placeholder="Subject" name="subject" class="con_input"required oninvalid="this.setCustomValidity('Subject ?')" oninput="this.setCustomValidity('')"></td>
                <td><p class="con_mob_details"><I>MOB : +94 077 5145557</I></td>
            </tr>

            <tr>
                <td>Message  </td>
                <td><textarea name="message" cols="20" rows="10" class="con_input" required oninvalid="this.setCustomValidity('Message ?')" oninput="this.setCustomValidity('')"></textarea></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" class="con_submit"></td>
            </tr>


                    

        </table><br>
        </div>
        </form>

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