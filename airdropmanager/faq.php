<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="module">
  import { Toast } from 'bootstrap.esm.min.js'

  Array.from(document.querySelectorAll('.toast'))
    .forEach(toastNode => new Toast(toastNode))
</script>
<link href=" https://fonts.googleapis.com/css?family=Open+Sans:100, 300, 400&display swap relastylesheet" />

<link href="https://stackpath.bootstrapcan.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="styleshent" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>FAQ</title>
    <style>
        body{
            background:rgb(238,238,228);
        }
.main33{
    background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 5px 15px 5px 15px;
}


    </style>
</head>
<body>
<?php include'header.php';  ?>
<div class="main33">

    <h1> FAQ</h1>
    <h3>
        
        Here you will find answers to the most 
        common airdrop-related questions.
    </h3>
    We have tried to make 
    this list as comprehensive as possible, but if you have any
    further questions that we didn’t cover here, feel free to contact us
    via email  or find us on Telegram.
    We will always do our best to answer any questions you have! <br>
    
    
    
    
    
    
    <?php
          include "connect1.php";
          $sql="select  * from faq ;";
          $result=mysqli_query($con,$sql);
          if($result){
              
              while($row=mysqli_fetch_assoc($result)){
                  
                  $id=$row['ID'];
                  $question=$row['quest'];
                  $answer=$row['ans'];
                  ?>
                  <div class="accordion mt-5" id="accordionExample">
                      <div class="card">
                          <div class="card-header" id="heading<?php $id ?>">
                    <h2 class="clearfix mb-0">
                        <a class="btn btn-link" style="text-decoration:none" data-toggle="collapse" data-target="#collapse<?php $id ?>" aria-expanded="true"
                        aria-controls="collapse<?php $id ?>">
                        
                        <?php
                
                
                echo $id;?>:<?php
                echo $question;?> 
              <i class="fa fa-angle-down"></i></a>
            </h2>
        </div>
        <div id="collapse<?php $id ?>" class="collapse" aria-labelledby="heading<?php $id ?>" data-parent="#accordionExample">
            <div class="card-body">  
                
                
                
                <?php
                echo $answer; ?>   
                  </div>
                </div> 
            </div>
        </div>
        
        <?php
              
              
              
              
              
            }
        }
        
        ?>
   </div>
   
   <?php include'footer.php';  ?>
</body>
</html>