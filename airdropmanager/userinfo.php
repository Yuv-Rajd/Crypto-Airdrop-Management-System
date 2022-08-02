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
   padding: 25px 25px 25px 25px;
   display: flex;
   justify-content: center;
}


    </style>
</head>

<body>
<?php include'header.php';  ?>
<div class="main33">
<div>


    <div class="d-flex" id="wrapper">
        
        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            
            
            
            
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <?php
               include'connect1.php';
               $emd=$_GET['email'];
               $sql="select * from participants where email='$emd';";
               $result=mysqli_query($con,$sql);
               $row=mysqli_fetch_assoc($result);
               $pid=$row['ID'];
               $pname=$row['NAME'];
               $ppassword=$row['PASWWORD'];
               $ptelegram=$row['TELEGRAM'];
               $ptwitter=$row['TWITTER'];
               $pfacebook=$row['FACEBOOK'];
               $pmobileno=$row['MOBILE_NO'];
               $bsc=$row['BSC'];
               $pemd=$row['EMAIL'];
               
               
               
               echo "<h1>Hii</h1>$pname";?> <br><br><hr size="8" width="90%" color="red">Email :<?php
               echo $pemd;?> <br> <br> Password :<?php
               echo $ppassword;?> <br> <br> Telegram :<?php
               echo $ptelegram;?> <br> <br> Twitter :<?php
               echo $ptwitter;?> <br> <br> Facebook :<?php
               echo $pfacebook;?> <br> <br> Mobile :<?php
               echo $pmobileno;?> <br> <br> BSC :<?php
               echo $bsc;?> <br> <?php
               // echo'<button onclick="history.back()">Go Back</button>';
               
               
               ?><?php
               
               ?> 
                  
                  <!-- main body -->
                </div>
                
                <div class="row my-5">
                    
                    <div class="col">
                        <?php    echo '
                    <button  style="background-color:black" 
                    class="btn btn-primary"><a style="text-decoration:none" href="indexx.php?email='.$pemd.'"class="text-light">Go Back</a></button>';?>
                                                <?php    echo '<button  style="background-color:green" 
                                                class="btn btn-primary"><a style="text-decoration:none"href="updateuserinfo.php?email='.$pemd.'"class="text-light">update</a></button>';
                                                
                                                ?> 
                  
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>

</div>
</div>
<?php include'footer.php';  ?>

</body>

</html>