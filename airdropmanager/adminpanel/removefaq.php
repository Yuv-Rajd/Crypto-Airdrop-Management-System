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
               $quest=$_GET['quest'];
               $sql="DELETE FROM faq  WHERE quest ='$quest';";
               $result=mysqli_query($con,$sql);
               if($result){
                   header("location:faq.php");
                   
      
                  } 
               else {
                  die(mysqli_error($con));
                    }
?>


               
                    
