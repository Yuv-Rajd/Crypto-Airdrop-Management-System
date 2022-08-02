<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles1.css" />
    <title>AIRDROP</title>
</head>

<body>
    
<?php
 include "connect1.php";
                            $token_symbol=$_GET['tokensymbol'];
                            $pemd=$_GET['email'];
                            $sql="INSERT INTO `joined_in` VALUES(NULL,'$token_symbol','$pemd','waiting');";
                            $result=mysqli_query($con,$sql);
                             if($result){
                           echo"update succefully";
                           header("location:indexx2.php?tokensymbol=$token_symbol&email=$pemd");
                          

     
      
     } 
  else {
     die(mysqli_error($con));
       }
                            

                            ?>
</body>

</html>