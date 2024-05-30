 <?php
	include_once'config.php';
	session_start();
?>
<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST["name"];
		$rate = $_POST["rating"];
		$comment = $_POST["comment"];
		
		$sql="INSERT INTO
	          review(R_id,R_name,R_rate,R_comment) 
			  VALUES('','$name','$rate','$comment')";
			  
		if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
		{
			echo"<script>alert('Thanks for your feedback!')</script>";
		}else
		{
			echo"<script>alert('Review failed!')</script>";
		}
			
	}
?>
<!DOCTYPE html>
<html>
<head><title>Reviews</title>
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
<center>
<div class="Recontainer">
    <section id="review-section">
      <h1 class="Rh1">Overall Rating: <span id="rating">★★★★☆</span></h2>

      <div class="review-form">
        <h3 class="write_a_review">Write a Review</h3>
        <form action="" method="post">
          <div class="review_form-group">
            <label for="name" class="Rlabel">Your Name:</label>
            <input type="text" id="name" name="name" class="input" required>
          </div>

          <div class="review_form-group">
            <label for="rating" class="Rlabel">Rating:</label>
            <input type="number" id="rating" name="rating" min="1" max="5" class="input" required>
          </div>

          <div class="review_form-group">
            <label for="comment" class="Rlabel">Comment:</label>
            <textarea id="comment" name="comment" class="textarea" required></textarea>
          </div>

          <div class="review_form-group">
            <input type="submit" value="Submit Review" class="Rsubmit" name="submit">
          </div>
        </form>
      </div>
  </center>
      <div class="review-list">
        <h2 class="Rh2">Reviews</h2>
      </div>
    </section>
  </div>

  <?php
	$sql="select*from review";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			
			echo "<div class='rev_set1'><h3 class='rev_h3'>".$row["R_name"]."</h3><h4 class='rev_h4'>Rating: ";
			$rate=$row["R_rate"];
			for($i=0;$i<$rate;$i++){
				echo"★";
			}
			
			echo"</h4><p class='rev_p'>".$row["R_comment"]."</p></div>";
			echo"<div class='rev_set2'><h3 class='rev_resp'>".$row["M_feedback"]."</h3></div>";
		}
	}
  ?>

   
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