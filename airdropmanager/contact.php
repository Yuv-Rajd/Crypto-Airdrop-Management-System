<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles1.css" />
    <title>contact</title>
    <style>
        body{
            background:red;
            /* rgb(238,238,228); */
        }
.main33{
    background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 5px 5px 5px 5px;
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
                
                
                
                
                
                <div class="container-fluid px-4">
                    <?php
          include "connect1.php";
          $sql="select  * from about;";
          $result=mysqli_query($con,$sql);
          if($result){
              while($row=mysqli_fetch_assoc($result)){
                  
                  $short_info=$row['SHORT_INFO'];
                  $emails=$row['emails'];
                  $telegram=$row['telegram_link'];
                  $twitter_link=$row['twitter_link'];
                  $f_link=$row['fb_link'];
                  $btc=$row['BTC'];
                  $eth=$row['ETH'];
                  
                  
                  ?><br><?php 
                }
            }
            ?>
           <div class="row g-3 my-2">
               <!-- main body -->
               
               <?php ?>
               
            </div>
            
            <div class="row my-5">
                
                <div class="col">
                    <!-- second body -->
                    <h1>Contact us / Submit Airdrop </h1><br>
                       <p>    Need to submit an airdrop or get in contact with the airdrops.io team? Simply contact 
                           us via Telegram or email or submit the form below and we’ll get back to you as soon as we
                            can! </p>
                    
                            <h3>Support Issues </h3>
                    You have questions regarding token distribution of our exclusive airdrops or any other issue? Please contact our support team via email or Telegram:
                    <li> <a href=" mailto: <?php echo $emails; ?>" style="text-decoration:none" class="card-link"><b style="color:black">Email <i class="fas fa-envelope"></i></b></a> <br></li>
                    <li style="text-color:black"><a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b style="color:black">Telegram <i class="fab fa-telegram"> </i></b></a></li> <br> 
                   <h3>Promotion Enquiries & Airdrop Listings</h3>
                   You want to list an airdrop or advertise on airdrops.io? Please use one of the follow contact options:
                    <li> <a href=" mailto: <?php echo $emails; ?>" style="text-decoration:none" class="card-link"><b style="color:black">Email <i class="fas fa-envelope"></i></b></a> <br></li>
                    <li style="text-color:black"><a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b style="color:black">Telegram <i class="fab fa-telegram"> </i></b></a></li> <br>                
                    
                    
                    <hr size="3" width="100%" color="">
                    <h3> Our Social Media</h3>
                    
                    
                    <li> <a href="<?php echo $twitter_link;?>" style="text-decoration:none" class="card-link"><b style="color:black">Twitter <i class="fab fa-twitter"></i></b></a></li>
                    <li> <a href="<?php echo $f_link; ?>" style="text-decoration:none" class="card-link"><b style="color:black">Facebook <i class="fab fa-facebook-square"></i></b></a> <br></li>
                 <br>   Or submit the following contact form: (no support)
                 
                 
                 <hr>   
                 
                      <form METHOD="post">
                        <div class="form-row">
                                     <div class="form-group col-md-6">
                                              <label for="">Name</label>
                                              <input type="text" class="form-control" placeholder="name" name="name" required>
                                     </div><br>
                              
                                      <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" placeholder="email" name="email" required>
                                        </div><br>
                                       <label for="">Message</label>
                                                <p><textarea type="text" cols="60" rows="10" name="message"  value=> </textarea><br/> </p>
                                 <button type="submit"style="background-color:green" class="btn btn-primary" name="submit">SEND</button>
                          </div>
                   </form>
                   <?php
          include "connect1.php";
          
          if(isset($_POST['submit']))
          { 
              $name=$_POST['name'];
              $email=$_POST['email'];
              $message=$_POST['message'];
           
            $sql= "insert into support_enquiry values('','$name','$email','$message');";
            $result = mysqli_query($con,$sql);
            if($result){
              echo"succesfull";
              
            }else{
              echo"error try again!";
              
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









</div>


<?php include'footer.php';  ?>
</body>
</html>