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
            height: 420px;
        
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

                        <!-- main body -->
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" >Token Symbol</th>
                                    <th scope="col">Token-Name</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Ending Date</th>
                                    <th scope="col">Approval Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                        <?php

                         include'connect1.php';
                         $pemd=$_GET['email'];
                         
                         //$sql="SELECT TOKEN_SYMBOL,TOKEN_NAME,VALUE,ENDING_DATE FROM airdrops where TOKEN_SYMBOL IN(SELECT TOKEN_SYMBOL FROM joined_in WHERE EMAIL='$pemd');";
                         $sql="SELECT A.TOKEN_SYMBOL,A.TOKEN_NAME,A.VALUE,A.ENDING_DATE,J.STATUS FROM airdrops AS A,joined_in AS J where A.TOKEN_SYMBOL=J.TOKEN_SYMBOL AND J.EMAIL='$pemd' GROUP BY TOKEN_SYMBOL ORDER BY STATUS DESC;";
                         $result1=mysqli_query($con,$sql);
                         if($result1){
                             while($row=mysqli_fetch_assoc($result1)){
                                 
                                
                                 $token_symbol=$row['TOKEN_SYMBOL'];
                                 $token_name=$row['TOKEN_NAME'];
                                 $value=$row['VALUE'];
                                 $ending_date=$row['ENDING_DATE'];
                                $status=$row['STATUS'];
                             
                                 echo '<tr> <th scope="row"><a style="text-decoration:none"  href="indexx2.php?tokensymbol='.$token_symbol.'&email='.$pemd.'"
                                 class="text-dark">'.$token_symbol.'</a></th>
                                 
                                                <td>'.$token_name.'</td>
                                                <td>'.$value.'</td>
                                                <td>'.$ending_date.'</td>
                                                <td>'.$status.'</td>
                                        </tr>';
                                
                         

                             }
                            }
               ?>     
               </tbody>
           </table>
                    </div>
                    
                    <div class="row my-5">
                        
                        <div class="col">
                            <!-- second body -->
                           
                            <span style="color:red"><hr></span>  <hr> <h5>If Approval Satus is </h5> 
                            <p> Waiting : Your Airdrop Claim Request Is Still Under Process</p> 
                            <p> Aproved : Your Airdrop Claim Request Is Processed By Admin</p>   <hr>     
                           <div id="foo">

                               <h3>Premium Service</h3>
                               <p> Our Premium Service is Still Under Maintainance .Wait Until furthur notification </p>              </div>
                            </div> 
                       <hr>
                       <?php echo'     <button  style="background-color:black" class="btn btn-primary"><a style="text-decoration:none" href="indexx.php?email='.$pemd.'"class="text-light">Go Back</a></button>  <br><br>'; ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</div></div>
    <?php include'footer.php';  ?>
    
</body>

</html>