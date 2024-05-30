<?php
    session_start();
    include_once'config.php'; //link with config.php
	if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $rid=$_POST["id"];
        $password=$_POST["psw"];
		
		$sql="SELECT * FROM receptionist WHERE R_id='$rid'&&Password='$password'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['R_id']===$rid&& $row['Password']===$password){
				$_SESSION["rid"] = $row['R_id'];
				header("Location:rpage.php");
			}
		   else
			{
				echo"<script>alert('Your login invalid!')</script>";
				header("Location:rlogin.php");
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
	<title>Sky Blue Luxury Hotel</title>
	<link rel="stylesheet" href="css\styles.css">
</head>
<body>
<div class="body"></div>
<!--Header-->
	<img class="blue" src="images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="images/Home/logo0.png" alt="logo">
	<img class="user" src="images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>
<center>	
<form method="POST" action="" class="log_form" >
	<div class="log_form_text">
		<h2>LOGIN</h2>
		<label for="name">Receptionist ID</label><br>
		<input type="text" class="log_input" id="name" name="id"  placeholder="abcd" required><br><br>
		<label for="psw">Password</label><br>
		<input type="password" id="pws" name="psw" class="log_input" required><br><br>
		<input type="submit"  class="log_sub" id = "submitBtn">	
	</div>
</form>
</center>				
<hr>
</body>
</html>