<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Logout</title>
<script src="./js/index.js"></script>
<link rel="stylesheet" href="./css/styles.css">

</head>
<body>

<!--Header-->
	<img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	<img class="logo" src="./images/Home/logo0.png" alt="logo">
	<img class="user" src="./images/Home/user.png" alt="logo">
	<h1 id="topic"><b>THE  SKY  BLUE</b></h1>


    <hr style="border:3px solid white">
	
	<center>
	<form class="log_form" method="POST">
	<input type="submit" name="logout" class="logout" value="Logout">
    </form>
    <?php
        if(isset($_POST["logout"]))
        {
        session_destroy();
        header("Location:index.php");
        }
    ?>

	</center>
	
<hr>	
</body>
</html>
