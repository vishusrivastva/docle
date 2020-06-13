<?php 

session_start();

if(!isset($_SESSION['userName']) )

{ 

header('location:login.php'); 

	}

	 $user=$_SESSION['userName'];

	

 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	
	<?php 

		     include('db.php');

           //  $query="select * from users where uMail='".$email."'";

	      ?>
	
	
   

        <?php

    
echo 'hello '.$user;
 
        ?>
		<input type="button" value="Logout" onclick="window.location.href = 'logout.php';">
    </body>
</html

 