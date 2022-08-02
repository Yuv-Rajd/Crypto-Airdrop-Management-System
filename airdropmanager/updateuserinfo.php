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
    <style>
        body{
            background:rgb(238,238,228);
        }
.main33{
    background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 10px 10px 10px 10px;
   display:flex;
   justify-self: center;
   justify-content: center;
}


    </style>
</head>

<body>
<?php include'header.php';  ?>
<div class="main33">

    

<?php
               include'connect1.php';
               $pemd=$_GET['email'];
               $sql="select * from participants where email='$pemd';";
               $result=mysqli_query($con,$sql);
               $row=mysqli_fetch_assoc($result);
               $pid=$row['ID'];
             
$pemd=$row['EMAIL'];
$pname=$row['NAME'];
$ppassword=$row['PASWWORD'];
$ptelegram=$row['TELEGRAM'];
$ptwitter=$row['TWITTER'];
$pfacebook=$row['FACEBOOK'];
$pmobileno=$row['MOBILE_NO'];
$bsc=$row['BSC'];



 ?>
   <div>

       <h2>Update Your Profile </h2>
       
       
       
       
       <form class =""  method="post">
           
           <div class="form-row">
               <!-- <a href = "userinfo.php"><p align=right> ❌</p></a>
               <a href="javascript:history.back()">Go Back</a>
               <input type="button" value="Go back!" onclick="history.back()">
               <button onclick="history.back()">Go Back</button> -->
               
               <div class="form-group col-md-6">
                   <label for="">name<span style="color:red">*</span></label><br>
                   <input type="text"class="" placeholder=" enter your name"name ="name"
                   autocomplete="off" required value=<?php echo $pname; ?>><br>   </div>
                   <div class="form-group col-md-6">
                       <label for="">email<span style="color:red">*</span></label><br>
                       <input type="email"class="" placeholder=" enter your email"name ="email" 
                       autocomplete="off" required value=<?php echo $pemd; ?>><br>   </div>
                       <div class="form-group col-md-6">
                           <label for="">password<span style="color:red">*</span></label><br>
                           <input type="password"class="" placeholder="set your password"name ="password" 
                           autocomplete="off" required value=<?php echo $ppassword; ?>><br>   </div>
                           <div class="form-group col-md-6">
                               <label for="">telegram<span style="color:red">*</span></label><br>
                               <input type="text"class="" placeholder="(ex:@username)"name ="telegram" 
                               autocomplete="off" required value=<?php echo $ptelegram; ?>><br>   </div>
                               <div class="form-group col-md-6">
                                   <label for="">twitter<span style="color:red">*</span></label><br>
                                   <input type="text"class="" placeholder="(ex:@username"name ="twitter" 
                                   autocomplete="off" required value=<?php echo $ptwitter; ?>><br>   </div>
                                   <div class="form-group col-md-6">
                                       <label for="">facebook</label><br>
                                       <input type="text"class="" placeholder=" facebook profile link"name ="fb"
                                       autocomplete="off"value=<?php echo $pfacebook; ?>><br>   </div>
                                       <div class="form-group col-md-6">
                                           <label for="">mobile_no<span style="color:red">*</span></label><br>
                                           <input type="text"class="" placeholder="mobile number"name ="mobile" 
                                           autocomplete="off" required pattern="[0-9]{10}"value=<?php echo $pmobileno; ?>><br>   </div>
                                           <div class="form-group col-md-6">
                                               <label for="">BSC BEP20 address<span style="color:red">*</span></label><br>
                                               <input type="text"class="" placeholder=" BNB smart chain address"name ="bsc" 
                                               autocomplete="off" required value=<?php echo $bsc; ?>><br>   </div>
                                            </div><br>
                                            <?php echo ' <button  style="background-color:rgb(130, 0, 128)" class="btn btn-primary"><a style="text-decoration:none" href="userinfo.php?email='.$pemd.'"
               class="text-light">Go Back</a></button>'; ?>
    <!-- <button onclick="history.back()">Go Back</button> -->
    
    <button type="submit"   style="background-color:green" class="btn btn-primary" name ="submit">update</button>
</form>
<?php
   
   include'connect1.php';
   if(isset($_POST['submit'])){
       // $name=$_POST['name'];
       $pem=$_POST['email'];
       $pname=$_POST['name'];
       $ppassword=$_POST['password'];
       $ptelegram=$_POST['telegram'];
       $ptwitter=$_POST['twitter'];
       $pfacebook=$_POST['fb'];
       $pmobileno=$_POST['mobile'];
       $bsc=$_POST['bsc'];
       
       $sql="update participants set EMAIL='$pem', NAME='$pname', PASWWORD='$ppassword', TELEGRAM='$ptelegram', TWITTER='$ptwitter', FACEBOOK='$pfacebook', MOBILE_NO=$pmobileno , BSC='$bsc'
       where email='$pemd';";
       $result=mysqli_query($con,$sql);
       if($result){
           echo"update succefully";
           
           
        } 
        else {
            die(mysqli_error($con));
        }
    }
    
    
    ?>

<!-- main body -->
</div>

</div>
<?php include'footer.php';  ?>

</body>

</html>