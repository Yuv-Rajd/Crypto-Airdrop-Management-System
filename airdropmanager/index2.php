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
            background:red);
        }
.main33{
   background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 5px 5px 5px 5px;
}
.cshadow{
    box-shadow:0 0 10px 0 rgb(44, 94, 107);
}


    </style>
</head>

<body>
    <div class="body">
<?php include'header.php';  ?>
<div class="main33">

    <div class="d-flex" id="wrapper">
   
        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            




            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                   <!-- main body -->
                   <div>
                    <?php
                             
                             include "connect1.php";
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
                        <div class="details"> <div style="display:flex">
                        <!-- <p>     <h3 class="fs-4 mb-3">Airdrop Detail: </h3>                     </p> -->
                           <div class="cshadow">
                    <div class="card" style="width: 50rem;">
  <img src="image/221.jpg" class="card-img-top" alt="..."   width = "40" height = "400">
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
</div></div></div></div><br><br>
                   
<div class="">                                   
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
                               ?>
                            </tbody>
  </table></div>
                               
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
                        
                </div>

                <div class="row my-5">
                   
                    <div class="col">
                        <!-- second body -->
                        <?php echo '
                        <button  style="background-color:black" 
                                                class="btn btn-primary"><a style="text-decoration:none" href="index.php?"class="text-light">Go Back</a></button> ';?>
                   
                                                                   
                  
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    </div>
    <?php include'footer.php';  ?>
    <script>
function myFunction() {
  alert("Thanks for Participating!! ");
}
</script>


    </div>

</body>

</html>