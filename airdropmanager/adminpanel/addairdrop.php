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
        <!-- Sidebar -->
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
                <a href="aabout.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h3 class="fs-4 mb-3"></h3>
                    <div class="col">

 
<form method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">TOKEN SYMBOL<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="TOKEN SYMBOL" name="token_symbol" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">TOKEN NAME<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="TOKEN NAME" name="token_name" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">VALUE<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="VALUE" name="value" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">ENDING DATE<span style="color:red">*</span></label>
      <input type="date" class="form-control" placeholder="ENDING DATE" name="ending_date" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">JOINED DATE</label>
      <input type="date" class="form-control" placeholder="JOINED DATE" name="joined_date"  >
    </div>
    <div class="form-group col-md-6">
      <label for="">DISTRIBUTION DATE<span style="color:red"></span></label>
      <input type="date" class="form-control" placeholder="DISTRIBUTION DATE" name="distribution_date"  >
    </div>
    <div class="form-group col-md-6">
      <label for="">MAX- PARTICIPANTS<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="MAX- PARTICIPANTS" name="max_participants" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">TOTAL SUPPLY<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="TOTAL SUPPLY" name="total_supply" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">WEB LINK<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="WEB LINK" name="web_link" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">TELEGRAM<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="TELEGRAM" name="telegram" value="https://t.me/" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">FACEBOOK</label>
      <input type="text" class="form-control" placeholder="FACEBOOK" name="f_link"  >
    </div>
    <div class="form-group col-md-6">
      <label for="">TWITTER<span style="color:red">*</span></label>
      <input type="text" class="form-control" placeholder="TWITTER" name="twitter_link" required >
    </div>
    <div class="form-group col-md-6">
      <label for="">CONTRACT ADDRESS</label>
      <input type="text" class="form-control" placeholder="CONTRACT ADDRESS" name="contract_address" value="will be announced later" >
    </div>
    <div class="form-group">
      <label for="">ABOUT</label>
      <input type="text" class="form-control" placeholder="ABOUT" name="about" value="Lorem ipsum dolor sit amet, 
      consectetur adipisicing elit.Laboriosam rem porro quasi 
      fuga aperiam natus commodi fugit, quibusdam accusamus odit facilis? Necessitatibus 
      exercitationem blanditiis consectetur facilis. Officiis optio facilis mollitia." >
    </div>
    <!-- <div class="form-group">
      <label for="">IMAGE</label>
      <input type="file" class="form-control" id="image" name="image">
    </div> -->
    <button style="background-color:rgb(130, 0, 128)" class="btn btn-primary" onclick="history.back()">Go Back</button>
    <button  style="background-color:black"  type="submit" class="btn btn-primary" name="submit" >Confirm</button>
  </form>
  <?php
 
   include "connect.php";
   if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    
     
     $token_symbol=$_POST['token_symbol'];
     $token_name=$_POST['token_name'];             
     $value=$_POST['value'];
     $ending_date=$_POST['ending_date'];
     $joined_date=$_POST['joined_date'];
     $distribution_date=$_POST['distribution_date'];
     $max_participants=$_POST['max_participants'];
     $total_supply=$_POST['total_supply'];
     $web_link=$_POST['web_link'];
     $telegram=$_POST['telegram'];             
     $f_link=$_POST['f_link'];               
     $twitter_link=$_POST['twitter_link'];
     $about=$_POST['about'];
     $contract_address=$_POST['contract_address'];
     $imgfile=$_FILES["image"]["name"];



     $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    
     $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    
     if(!in_array($extension,$allowed_extensions))
          {
          echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
           }
else
{
  //rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$imgnewfile);

$status=1;
         $sql="INSERT INTO airdrops (ID,TOKEN_SYMBOL,TOKEN_NAME,VALUE,ENDING_DATE,JOINED_DATE,distribution_date,MAX_PARTICIPANTS,TOTAL_SUPLLY,WEB_LINK,TELEGRAM,FB_LINK,TWITTER_LINK,ABOUT,CONTRACT_ADDRESS,IMAGE) values (NULL,'$token_symbol','$token_name','$value','$ending_date','$joined_date','$distribution_date',$max_participants,'$total_supply',
        '$web_link','$telegram','$f_link','$twitter_link','$about','$contract_address','$imgnewfile');";
         $result=mysqli_query($con,$sql);
         if($result){
          echo"insertion succefully";
         
          
         } 
      else {
         die(mysqli_error($con));
           }
      
      
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