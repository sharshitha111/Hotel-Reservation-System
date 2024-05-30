<?php
    include_once'config.php';

$fullname=$_POST["fullname"];
$email=$_POST["email"];
$country=$_POST["country"];
$subject=$_POST["subject"];
$message=$_POST["message"];

//This condition doesn't want. because HTML form has included the required condition. 
//if(!empty($fullname) & !empty($email)){   

 
//This condition doesn't want. because HTML form has included the required condition. 
    //if(isset($_POST["submit"])){

        //insert data
          $sql="INSERT INTO contact_us(Customer_full_name,Customer_email,Customer_country,Customer_subject,Customer_message) VALUES ('$fullname','$email','$country','$subject','$message')";
        
          if($conn->query($sql)){
            //if data insert correctly show this
            echo'
            <!DOCTYPE html>
            <html>
            <head>
            <link rel="stylesheet" href="./css/styles.css">
	        <script src = "./js/js.js"></script>
            </head>
            <body>
  
            <!--Header-->
  
	        <img class="blue" src="./images/Home/blue1.jpg" alt="blue">
	        <img class="logo" src="./images/Home/logo0.png" alt="logo">
	        <img class="user" src="./images/Home/user.png" alt="logo">
	        <h1 id="topic"><b>THE  SKY  BLUE</b></h1>
	        <hr style="border:3px solid black">
    
            <div class="con_thanks">
	        <script src = "./js/js.js"></script>
			
                <center>
			    <script>con_alert();</script>
			
	        <h1 class="con_h1_thanks">Thank you for contacting us.We will get back to you as soon as possible.</h1>

	        <p id="con_send_message">Your message is sent</p>
	        <button type="button" class="con_go_back" name="on_go_back" onclick="go_back_button_function(this)" value="contact.php">Go Back</button><br>
                </center>
			     </div>
            </body>
            </html>';
          

            }

            //if data dosen't indsert correctly show this

            else{
            echo "Error:". $con->error;
            }
          //}
//}

  $conn->close();

?>
