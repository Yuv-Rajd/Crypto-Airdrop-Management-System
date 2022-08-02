<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
           <form action="login1.php" method="post" >
                               <label for=""> email</label>
                               <input type="email" name="email">
                               <br>
                               <label for=""> password</label>
                               <input type="password" name ="password">
                               <br>
                               <input type="submit">

            </form>
            <?php
                  include "connect1.php";
                                  
                  if(isset($_POST['password']))
                  {
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $sql= "select * from participants where email='$email' and password='$password';";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result) > 0){
                                echo"succesfull";
                                header("location:indexx.php");
                            }else{
                              echo" user not found";
                            }
             }
     ?>
</body>
</html>