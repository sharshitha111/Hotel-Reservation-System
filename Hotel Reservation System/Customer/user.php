<?php
    include_once'config.php';
	session_start();
    $_SESSION["UseriD"];
    if(isset($_SESSION["UseriD"])){ //already log
        $id=$_SESSION["UseriD"];
		$sql = "select* from tourists where T_id = $id";
	    $result = $conn->query($sql);	
        $row = $result->fetch_assoc();	
        $Tid=$row["T_id"];
        $fname=$row["Fname"];
        $lname=$row["Lname"];
        $dob=$row["DOB"];
        $gen=$row["Gender"];
        $con=$row["Country"];
        $passport=$row["PassportNo"];
        $mail=$row["Email"];
        $phone=$row["Phone"];
        $pass=$row["Password"];
    }
?>
<?php
    if(isset($_POST['sub'])){
    //echo"<script> alert('Success assign!')</script>";  
    $tid=$_POST['id']; 
    $fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$gen = $_POST["gender"];
	$country = $_POST["country"];
	$passport = $_POST["passport"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	
	if($_POST["password"]==0){
		
		$pass = $_POST["password"];
	}
	else{
		$pass=$pass=$row["Password"];
	}

    $sql="UPDATE tourists
    SET T_id=$tid,Fname='$fname',Lname='$lname',DOB='$dob',Gender='$gen',Country='$country',PassportNo='$passport',Email='$email',Phone=$phone,Password='$pass'
    WHERE T_id=$tid";
    if(mysqli_query($conn,$sql)) //predefine func.. for execute query -> mysqli_query(link,query)
	{
		echo"<script>alert('Your account saved successfully!')</script>";
	}else
	{
		echo"<script>alert('failed!')</script>";
	}
	
	//close the connection
	mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html>
<head><title>User Information</title>
<script src="./js/js.js"></script>
<link rel="stylesheet" href="./css/styles.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<!--Header-->
	<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="./images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>

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
    
	<form action="" method="POST" onsubmit="return checkPassword()" class = "reg-form">
        
		<h1 style="color:white; font-family:poppins, sans-serif;">User Account</h1>
		
		<div>
		<label class = "reg-text reg-des">User ID</label>
        <input type="text" name="id" value="<?php echo $Tid ?>" class = "size" required readonly ><br><br> 
		</div>
		<div>
		<label class = "reg-text reg-des">First Name</label>
        <input type="text" name="firstname" value="<?php echo $fname ?>"  class = "size" required ><br><br> 
		</div>
		
		<div>
        <label class = "reg-text reg-des">Last Name</label>
		<input type="text" name="lastname" value="<?php echo $lname ?>"  class = "size" required><br><br>		
        </div>
		
		<div>
		<label class = "reg-text reg-des">DOB</label>
		<input type="date" name="dob" class = "size" value="<?php echo $dob ?>" required><br><br>
		</div>
		
		<div>
		<label class = "reg-text reg-des">Gender</label>
		<input type="text" name="gender" class = "size" value="<?php echo $gen ?>" required><br><br>
		</div>
		
		<div>
		<label class = "reg-text reg-des">Country</label>
		<input type="text" name="country" class = "size" value="<?php echo $con ?>" required><br><br>
		</div>
		
        <div>		
        <label class = "reg-text reg-des">Passport No</label>
		<input type="text" name="passport" value="<?php echo $passport ?>" class = "size" required><br><br> 
		</div>
		
		<div>
		<label class = "reg-text reg-des">Email</label>
		<input type="email" name="email" value="<?php echo $mail ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\[a-z]{2,3}" class = "size" required><br><br>	
		</div>
		
		<div>
		<label class = "reg-text reg-des">Phone Number</label>
		<input type="text" name="phone" value="<?php echo $phone ?>" class = "size" required><br><br>
		</div>
		
		<div>
		<label class = "reg-text reg-des">Old Password</label>
		<input type="Password" id="opwd"  class = "size" name="password" value="<?php  echo $pass ?>" readonly><br><br>
		</div>
		    <!--script>
                    function checkoldPassword(){
	                if(document.getElementById("opwd").value!="")
	                {
                        alert("Password Mismatched with old password!");
                        return false;
	                }
                    else
                    {
                        alert("Success!");
                        return true;
                    }}
            </script-->
		<div>
		<label class = "reg-text reg-des">New Password</label>
	
		<input type="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class = "size" name="password"><br><br>
		</div>
		<div>
		<label class = "reg-text reg-des">Confirm Password</label>
		<input type="password" id="confirmpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class = "size" ><br><br>
		</div>
		
		
		<input type="submit" value="Save" id="submitBtn" class = "signbtn" name="sub">
		
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
