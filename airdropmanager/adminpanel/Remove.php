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
               $pemd=$_GET['email'];
               $sql="DELETE FROM participants WHERE EMAIL = '$pemd';";
               $result=mysqli_query($con,$sql);
               if($result){
                   echo "delted succesfully";
                   header("location:participants.php");
     
      
                  } 
               else {
                  die(mysqli_error($con));
                    }
?>


               
                    
