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
               $token_symbol=$_GET['tokensymbol'];
               $sql="DELETE FROM airdrops WHERE TOKEN_SYMBOL = '$token_symbol';";
               $result=mysqli_query($con,$sql);
               if($result){
                   echo "delted succesfully";
                   header("location:airdrops.php");
     
      
                  } 
               else {
                  die(mysqli_error($con));
                    }
?>


               
                    

                   