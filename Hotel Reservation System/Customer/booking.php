<?php
	include_once'config.php';
?>
<?php
	session_start();
	$_SESSION["UseriD"];
    if(!isset($_SESSION["UseriD"])){
        header("Location:login.php");
    }
?>
<?php
	if(isset($_POST['submit'])){
		$type = $_POST["type"];
		$no = $_POST["roomNo"];
		$in = $_POST["indate"];
		$out = $_POST["outdate"];
		$status="Pending";
		$T_id = $_SESSION["UseriD"];
		
		
		$sql="INSERT INTO
	          booking(Booking_id,Room_Type,NoOfRooms,Check_In_Date,Check_Out_Date,Status,T_id) 
			  VALUES('','$type','$no','$in','$out','$status','$T_id')";
			  
		if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
		{
			echo"<script>alert('Booking successfully!')</script>";
		}else
		{
			echo"<script>alert('Booking failed!')</script>";
		}
			
	}
	
?>
<!DOCTYPE html>
<html>
<head><title>Booking</title>
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
    

               
 <div>
            <form class ="book-form" action="" method="post" align="center">
			      <h2 class="booking-label">BOOK YOUR RESERVATION NOW !</h2><br><br><br>
                <div>
                    <label  class = "booking-label"  for="type" name="label_for_type">Select Room Type :</label>
                    <select name="type" id="type" class="booking_select_input" required>
                        <option value="" selected disabled>Please select room type ! </option>
                        <option value="Superior Rooms">Superior Rooms</option>
                        <option value="Standard Rooms">Standard Rooms</option>
						<option value="Business Executive Rooms">Business Executive Rooms</option>
                        <option value="Eco Rooms">Eco Rooms</option>
                        <option value="Camping">Camping</option>
                    </select>
                </div><br>
				
                <div>
				   <label  class = "booking-label" for="NoOfRooms" name="NoOfRooms">Select No. Of Rooms :</label>
                   <input type = "number" placeholder="Please select No. of Rooms !" min = "1" max ="5" name="roomNo" class="booking_select_input">
                    
                </div><br><br>
				<label  class ="booking-label"  name="Facilities">Select Facilities: </label>
                <div class = "booking-row">              
					
					<label  class ="booking-facility"  name="Facilities">Swimming Pool </label>
			        <input class="booking_select_input" type="checkbox">


                    <label  class ="booking-facility"  name="Facilities">Spa</label>
					<input type="checkbox" class="booking_select_input">
					
		            <label  class ="booking-facility"  name="Facilities">Golf </label>
		            <input class="booking_select_input" type="checkbox" >
					
					
                    <label  class ="booking-facility"  name="Facilities">Fitness</label>
                    <input class="booking_select_input" type="checkbox" >
					
					<label  class ="booking-facility"  name="Facilities">Safari </label>
			        <input class="booking_select_input" type="checkbox" >

                     
               </div><br><br>
              
                <div>
                      <label class = "booking-label" for="date-in">Check-In Date :</label>
                      <input type="date" name="indate" id="date" placeholder="Check in date"  class="booking_select_input" required>
                </div><br>
                 <div>
                      <label class = "booking-label"  for="date-out">Check-Out Date :</label>
                      <input type="date" name="outdate" id="date" placeholder="Check out date" class="booking_select_input"required>
                </div>
                <div>
                      <input type="submit" value="Book Now !" id="submit" class="booking_select_input booking_sub" name="submit" >
                </div>

                <button type="button" class = "pay-bttn"><a href = "./paySelect.php" class="pay-bttn-a">Pay Now !</a></button>
            </form>
        </div>
            </div>
        </section>
		<br>
		 <table class="booktable" border="2px">
        <tr class="Bookr">
		
            <th class="Bookh">Booking ID</th>
            <th class="Bookh">Room Type</th>
            <th class="Bookh">No. of Rooms</th>
            <th class="Bookh">Check-in Date</th>
            <th class="Bookh">Check-out Date</th>
            <th class="Bookh">Status</th>
            <th class="Bookh">TID</th>
			<th class="Bookh">Edit</th>
            <th class="Bookh">Cancel</th>
			
        </tr>
			<?php
			$id=$_SESSION["UseriD"];
			$sql="select*from booking where T_id='$id'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				
				while($row=mysqli_fetch_assoc($result))
				{
					echo"<tr class='Bookr'><td class='Bookd'>".$row["Booking_id"]."</td><td class='Bookd'>".$row["Room_Type"].
						"</td><td class='Bookd'>".$row["NoOfRooms"]."</td><td class='Bookd'>".$row["Check_In_Date"].
						"</td><td class='Bookd'>".$row["Check_Out_Date"]."</td><td class='Bookd'>".$row["Status"].
						"</td><td class='Bookd'>".$row["T_id"]."</td>";
					echo"<td class='Bookd'><button class='book_buttn'><a href='bookingedit.php? id=$row[Booking_id]'>Edit</a>
					</button></td>";
					echo"<td class='Bookd'><button class='book_buttn'><a href='bookingcancel.php? id=$row[Booking_id]'>Cancel</a></button></td></tr>";
				}
			}
		?>
      
    </table>

		
		</center>
		<br>
		<hr class ="hr">
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