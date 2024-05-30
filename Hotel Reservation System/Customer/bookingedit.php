<?php
	include_once'config.php';
	session_start();
?>
<?php
	$rid=$_GET['id'];
	if(isset($_POST['submit'])){
		$type = $_POST["type"];
		$no = $_POST["roomNo"];
		$in = $_POST["indate"];
		$out = $_POST["outdate"];
		
		$sql="UPDATE booking set Room_Type='$type',NoOfRooms='$no',Check_In_Date='$in', Check_Out_Date='$out'
				where Booking_id = '$rid'";
		if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
		{
			echo"<script>alert('Booking successfully!')</script>";
			header("Location:booking.php");
		}else
		{
			echo"<script>alert('Booking failed!')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head><title>Booking Form edit</title>
<script src="./js/js.js"></script>
<link rel="stylesheet" href="./css/styles.css">

</head>
<body>

<!--Header-->
	<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="images/Home/user.png" alt="logo">
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


    <hr style="border:3px solid black">
	
    <center>
    

               
 <div>
            <form class ="book-form" action="" method="post" align="center">
			      <h2 class="booking-label">EDIT RESERVATION</h2><br><br><br>
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
                   <input type = "number" placeholder="Please select No. of Rooms !" min = "1" max ="5" name="roomNo" class="booking_select_input ">
                    
                </div><br><br>
				<br><br>
              
                <div>
                      <label class = "booking-label" for="date-in">Check-In Date :</label>
                      <input type="date" name="indate" id="date" placeholder="Check in date"  class="booking_select_input"required>
                </div><br>
                 <div>
                      <label class = "booking-label"  for="date-out">Check-Out Date :</label>
                      <input type="date" name="outdate" id="date" placeholder="Check out date" class="booking_select_input"required>
                </div>
                <div>
                      <input type="submit" value="Edit" id="submit" class="booking_select_input booking_sub" name="submit" >
                </div>


            </form>
        </div>
            </div>
        </section>
</body>
</html>