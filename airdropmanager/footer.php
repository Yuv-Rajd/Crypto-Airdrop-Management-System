<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/ft.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
<?php
                                       include "connect1.php";
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












    <footer>
  
        
        <div class="abt1">
           <!-- <div class="imginfo"> -->
               <div class="abtimg">
                   <!-- <img src="image/1232.jpg" alt=""> -->
                   <img src="image/222.jpg" class="card-img-top" alt="..."  width = "40" height = "180">
                
               
                
            </div>
            <div class="abtinfo">
                <p style="color:white"class="fp2"> <br>   <?php echo $short_info ; ?> </p>
              
            </div>
            <!-- </div> -->
            <div class="abtdnt">
                 <h4 style="color:white" class="h4t"> contact us </h4>
                    <ul>
                       
                        
                        <li style="color:white"> <a href="mailto:<?php echo $emails; ?>" style="text-decoration:none" class="card-link"><b style="color:white">Email <i class="fas fa-envelope"></i></b></a> <br></li>
                        <li style="color:white"><a href=" <?php echo $telegram; ?>" style="text-decoration:none" class="card-link"><b style="color:white">Telegram <i class="fab fa-telegram"> </i></b></a></li>
                        <li style="color:white"> <a href="<?php echo $twitter_link;?>" style="text-decoration:none" class="card-link"><b style="color:white">Twitter <i class="fab fa-twitter"></i></b></a></li>
                        <li style="color:white"> <a href="<?php echo $f_link; ?>" style="text-decoration:none" class="card-link"><b style="color:white">Facebook <i class="fab fa-facebook-square"></i></b></a> <br></li>
                       
                    </ul>
            </div>
            <div class="abtdnt">
                <h4></h4>
                <h4></h4>
                <h4> </h4>
                <h4 style="color:white" class="h4t">  <i class="fas fa-coins"></i>   donate </h4>
                       <ul>
                          <li style="color:white"><i class="fab fa-btc"></i>      <?php echo $btc;?></li>
                          <li style="color:white"><i class="fab fa-ethereum"> </i>       <?php echo $eth;?> </li>
                       </ul>
            </div>
        </div>
        <div class="footerbtm">
        
        <p class="fp" >Copyright © Crypto AirDrop 2022</p>



    </div>
    </footer>
</body>
</html>