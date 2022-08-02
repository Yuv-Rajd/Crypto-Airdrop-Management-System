
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
   padding: 5px 5px 5px 5px;
}
.cshadow{
margin: 5px;
box-shadow:5px 5px 8px 0 rgb(44, 94, 107);
}


    </style>
</head>

<body>
<?php include'header.php';  ?>
<div class="main33">
    <div class="d-flex" id="wrapper">
   
        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
      
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    
                    <?php
               include'connect1.php';
               $emd=$_GET['email'];
               $sql="select * from participants where email='$emd';";
               $result=mysqli_query($con,$sql);
               $row=mysqli_fetch_assoc($result);
               $pid=$row['ID'];
             
$pemd=$row['EMAIL'];
$pname=$row['NAME'];
// $ppassword=$row['PASSWORD'];
// $ptelegram=$row['TELEGRAM'];
// $ptwitter=$row['TWITTER'];
// $pfacebook=$row['FACEBOOK'];
// $pmobileno=$row['MOBILE_NO'];
$bsc=$row['BSC'];


              
              ?>
                    
                    <h2 style="s" class="fs-2 m-0"><?php echo $pname;?></h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li> <?php echo'<a class="dropdown-item" href="userinfo.php?email='.$pemd.'"class="">profile</a>'; ?></li>
                                <li><?php echo '<a class="dropdown-item" href="userstatus.php?&email='.$pemd.'">check status</a>'; ?></li>
                                <li><a class="dropdown-item" href="adminpanel/alogin.php">admin login</a></li>
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            



  <div class="container-fluid px-4"> 
     <div class="row g-3 my-2">
            <?php

          include "connect1.php";
          $sql="select  * from airdrops;";
          $result=mysqli_query($con,$sql);
          if($result){
              while($row=mysqli_fetch_assoc($result)){
                  
                  $id=$row['ID'];
                  $token_symbol=$row['TOKEN_SYMBOL'];
                  $token_name=$row['TOKEN_NAME'];
                  $value=$row['VALUE'];
                  $ending_date=$row['ENDING_DATE'];
                  ?> 
            
            <div class="col-md-3">
                                                   <div class="cshadow">
                                                   
               
                                                   <div class="card" style="width: 17rem;">
                                                                <!-- <i class="fas fa-home "></i> -->
                                                     <img src="image/1212.png" class="card-img-top" alt="..."  width = "40" height = "80">
                                                       <div class="card-body">
                                                            <ul class="list-group list-group-flush">
                                                                <h5 class="card-title"><?php echo $token_name; ?></h5>
                                                               <li  class="list-group-item"> Symbol :<?php echo $token_symbol; ?></li>
                                                               <li  class="list-group-item">Value  :<?php echo $value; ?></li>
                                                                <li  class="list-group-item">End Date :<?php echo $ending_date; ?></li>
                                                                <h5></h5>
                                                            </ul>
              
                                                             <?php echo '<button style=""  class="btn btn-primary"><a style="text-decoration:none"  href="indexx2.php?tokensymbol='.$token_symbol.'&email='.$pemd.'"
                                                                   class="text-light">more</a></button> '; ?>
   
                                                        </div>
                                                  </div>
                                             </div></div>
                                             <?php
                                        } 
                                    }
                                    ?>
         </div>
     </div>


                <div class="row my-5">
                   
                    <div class="col">
                  
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    </div>
    <?php include'footer.php';  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

</body>

</html>