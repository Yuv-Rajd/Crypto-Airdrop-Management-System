<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<!-- <style>
    body{
    background-image: url('image/1232.jpg');
    background-repeat:repeat;
    background-size:cover;
}
</style> -->
<style>
        body{
            background:rgba(239,243,233,255);
        }
.main33{
    background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 25px 25px 25px 25px;
   display: flex;
   justify-content: center;
}


    </style>

<body>

    <div class="main33">

    <div>

        
        <div class="lgbody">
            <div class="lgmain">
                <h1> <a style="text-decoration:none" class="text-dark" href="index.php" >welcome to CRYPTO AIRDROP MANAGER!! </a></h1>
                <div class="lgcontainer">
                    
                    <div class="lglg">
                        <div class="divbd">
                            <form action="login.php" autocompete="off" method="post" >
                                <div  class="lgadmp">
                                    <label ><b class="lgadmp">email-id<span style="color:red">*</span></b></label>
                                    <br>
                                    <input type="email" class ="lgadmp"
                                    placeholder =  "email-id"name= "email" autocompete ="off" required >
                                </div>
                                <div class="lgadmp">
                                    <label ><b>password<span style="color:red">*</span></b></label>
                                    <br>
                                    <input type="password" class = "lgadmp"
                                    placeholder =  "password"name= "password" autocompete ="off" required >
                                </div> <div class="lgadmp">
                                    <input type="submit"> </div>
                                    <!-- <label for=""><b class="lgadmp">email</b></label> <br>
                                    <input class="lgadmp"type="email" name="email">
                                    <br>
                                    <label for=""> <b class="lgadmp"> password</b> </label><br>
                                    <input class="lgadmp" type="password" name ="password">
                                    <br>
                                    <input type="submit"> -->
                                    
                                </form>
                                
                                
                                
                                
                            </div>
                            
                        </div>
                        <a style="text-decoration:none" href="register.php">  <h4> new register</h4></a>
                        
                        
                        
                    </div>
                    <!-- <h4>sdkhjfksfdsdffsf</h4> -->
                </div>
            </div>
            <?php
          include "connect1.php";
          
          if(isset($_POST['password']))
          {
              $email=$_POST['email'];
              $password=$_POST['password'];
              $sql= "select * from participants where EMAIL='$email' and PASWWORD='$password';";
              $result = mysqli_query($con,$sql);
              if(mysqli_num_rows($result) > 0){
                  echo"succesfull";
                  header("location:indexx.php?email=$email");
                }else{
                    die("user not found");
                    header("location:login.php");
                    
                }
            }
            ?>
     
    </div></div>
     
    </body>
    </html> 