<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>AIRDROP</title>
</head>

<body>
  











    <div class="d-flex" id="wrapper">
        <!-- Sidebar  buuton -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>AIRdrop Manager</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-home me-2"></i>Home</a>
                <a href="airdrops.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-parachute-box me-2"></i>Airdrops</a>
                <a href="participants.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-friends me-2"></i>Participants</a>
                <a href="claimdetail.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Caim Detail</a>
                <a href="aabout.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-info me-2"></i>About</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a> -->
                        <a href="faq.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-question me-2"></i>FAQ</a>
                <a href="chat.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a> -->
                <a href="alogin.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Crypto airdrops</h2>
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
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                                <li><a class="dropdown-item" href="alogin.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
              

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">About</h3>
                    <div class="col">
                    <?php
                                       include "connect.php";
                                       $sql="SELECT * FROM `about`;";
                                       $result=mysqli_query($con,$sql);
                                       if($result){
                                          while($row=mysqli_fetch_assoc($result)){
                                          //  $token_symbol=$row['TOKEN_SYMBOL'];
                                         $short_info=$row['SHORT_INFO'];
                                         $emails=$row['emails'];
                                         $telegram=$row['telegram_link'];
                                         $twitter_link=$row['twitter_link'];
                                         $f_link=$row['fb_link'];
                                         $btc=$row['BTC'];
                                         $eth=$row['ETH'];
                                        


                                          }
                                        }



                
                    ?>
                    <form METHOD="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">emails</label>
      <input type="text" class="form-control" placeholder="email" name="emails"  value=<?php echo $emails; ?>>
    </div>

    
    <div class="form-group col-md-6">
      <label for="">TELEGRAM</label>
      <input type="text" class="form-control" placeholder="TELEGRAM" name="telegram"  value=<?php echo $telegram; ?>>
    </div>
    <div class="form-group col-md-6">
      <label for="">FACEBOOK</label>
      <input type="text" class="form-control" placeholder="FACEBOOK" name="f_link"  value=<?php echo $f_link; ?>>
    </div>
    <div class="form-group col-md-6">
      <label for="">TWITTER</label>
      <input type="text" class="form-control" placeholder="TWITTER" name="twitter_link"  value=<?php echo $twitter_link; ?>>
    </div>
    <div class="form-group col-md-6">
      <label for="">BTC</label>
      <input type="text" class="form-control" placeholder="btc" name="btc"  value=<?php echo $btc; ?>>
    </div>
    <div class="form-group col-md-6">
      <label for="">ETH</label>
      <input type="text" class="form-control" placeholder="eth" name="eth"  value=<?php echo $eth; ?>>
    </div>
    <div class="form-group">
      <label for="">ABOUT</label>
      <input type="text"  class="form-control" placeholder="short info" name="short_info"  value=<?php echo $short_info; ?>>
     <!-- <p><textarea type="text" cols="60" rows="10" name="short_info"  value=>
      </textarea><br/>
    </p> -->
  </div>
    <button  style="background-color:rgb(130, 0, 128)" class="btn btn-primary"><a style="text-decoration:none" href="index.php"
                                                class="text-light">Go Back</a></button>
  <button type="submit"style="background-color:green" class="btn btn-primary" name="submit">SAVE</button>
</form>
<?php
   
   include'connect.php';
   if(isset($_POST['submit'])){
 // $name=$_POST[''];
 $short_info=$_POST['short_info'];
                                         $emails=$_POST['emails'];
                                         $telegram=$_POST['telegram'];
                                         $twitter_link=$_POST['twitter_link'];
                                         $f_link=$_POST['f_link'];
                                         $btc=$_POST['btc'];
                                         $eth=$_POST['eth'];
                                         $sql="UPDATE about SET emails='$emails',telegram_link='$telegram',twitter_link='$twitter_link',fb_link='$f_link',BTC='$btc',ETH='$eth',SHORT_INFO='$short_info' WHERE emails='$emails';";


    $result=mysqli_query($con,$sql);
    if($result){
        echo"update succefully";
       
        
       } 
    else {
       die(mysqli_error($con));
         }
  }
  
  
  ?>
  






                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

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