<?php
	include_once'config.php'; //link with config.php
?>
<?php
    $id=$_GET['rid'];

    $query="DELETE from review WHERE R_id='$id'";

    $data=mysqli_query($conn,$query);
    
	if($data){
		echo"<script>alert('Send')</script>";
		header("Location:review.php");
	}
	else{
    	echo"<script>alert('Not send')</script>";
	}
    mysqli_close($conn);
?>