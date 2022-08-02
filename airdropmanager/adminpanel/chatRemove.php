<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alert</title>
</head>
<body>
    
</body>
</html>


<?php
               include "connect.php";
               $EMAIL=$_GET['email'];
               $sql="DELETE FROM support_enquiry  WHERE EMAIL ='$EMAIL';";
               $result=mysqli_query($con,$sql);
               if($result){
                   header("location:chat.php");
                   
      
                  } 
               else {
                  die(mysqli_error($con));
                    }
?>


               
                    
