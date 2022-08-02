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
                 class="fab fa-btc me-2"></i>Airdrops</a>
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
                    <!-- <h3 class="fs-4 mb-3">Airdrop Detail</h3> -->
                    <div class="col"> <div>
                    <?php
                             
                             include "connect.php";
                            $token_symbol=$_GET['tokensymbol'];
                             
                           
                            $sql="select * from airdrops where TOKEN_SYMBOL='$token_symbol';";
                            $result=mysqli_query($con,$sql);
                            $row=mysqli_fetch_assoc($result);
                                  $id=$row['ID'];
                                  $token_symbol=$row['TOKEN_SYMBOL'];
                                  $token_name=$row['TOKEN_NAME'];               
                                  $value=$row['VALUE'];
                                  $ending_date=$row['ENDING_DATE'];
                                  $joined_date=$row['JOINED_DATE'];
                                  $distribution_date=$row['distribution_date'];
                                  $max_participants=$row['MAX_PARTICIPANTS'];
                                  $total_supply=$row['TOTAL_SUPLLY'];
                                  $web_link=$row['WEB_LINK'];
                                  $telegram=$row['TELEGRAM'];              
                                  $f_link=$row['FB_LINK'];               
                                  $twitter_link=$row['TWITTER_LINK'];
                                  $about=$row['ABOUT'];
                                 
                                  $contract_address=$row['CONTRACT_ADDRESS']; ?> 
                                  
                    </div>
                        <div class="details"> <div style="display:flex"><p>     <h3 class="fs-4 mb-3">Airdrop Detail: </h3>                     </p>
                           
                    <div class="card" style="width: 50rem;">
  <img src="image/1232.jpg" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title">
                                   <?php
                                   echo $token_name;
                                  
                                   ?></h5>
    <p class="card-text"> <?php
                                   echo $about;
                                  
                                   ?></h5>.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <b>Value :</b><?php
                                   echo $value;
                                  
                                   ?></li>
    <li class="list-group-item"><b>Symbol :</b><?php
                                   echo $token_symbol;
                                  
                                   ?></li>
    
  </ul>
  <div class="card-body">
      <p>jadhajsdsh</p>
    <a href="<?php echo $web_link;?>" style="text-decoration:none" class="card-link"><b>Web LInk <i class="fas fa-paperclip me-2"></i> </b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href="<?php echo $twitter_link;?>" style="text-decoration:none" class="card-link"><b>Twitter <i class="fab fa-twitter"></i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b>Telegram <i class="fab fa-telegram"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b><i class="fab fa-telegra"> </i></b></a>
    <a href="<?php echo $f_link; ?>" style="text-decoration:none" class="card-link"><b>Facebook <i class="fab fa-facebook-square"></i></b></a> <br>
  </div>
</div></div></div><br><br>
                   
                                   <table class="table bg-white rounded shadow-sm  table-hover">
                                   <thead>
                            <tr>
                                
                                <th scope="col">Maximum Participants</th>
                                <th scope="col">Total Distribution</th>
                                <th scope="col">Contract Address</th>
                              
                                
                            </tr>
                        </thead>
                        <tbody> <?php
                               echo '<tr> 
                               <td>'.$max_participants.'</td>
                               <td>'.$total_supply.'</td>
                               <td>'.$contract_address.'</td>
                               </tr>';
                               ?></table></tbody>
                               
                               
                                   <table class="table bg-white rounded shadow-sm  table-hover">
                                       <thead>
                                <tr>
                                    
                                    <th scope="col">Joined Date         </th>
                                    <th scope="col">Ending Date        </th>
                                    <th scope="col">Distribution Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>


                                   <?php
                                   echo '<tr> 
                                   <td>'.$joined_date.'</td>
                                   <td>'.$ending_date.'</td>
                                   <td>'.$distribution_date.'</td>
                                   </tr>';
                                   ?>


   
                                   
                              
                
 
                                
                                
                            </tbody>
                        </table>
                        
                        <button  style="background-color:rgb(130, 0, 128)" class="btn btn-primary"><a style="text-decoration:none" href="airdrops.php"
                                                class="text-light">Go Back</a></button>
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
