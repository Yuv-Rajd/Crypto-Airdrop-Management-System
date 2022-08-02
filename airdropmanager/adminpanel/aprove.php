<?php
                             
                             include "connect.php";
                            $token_symbol=$_GET['tokensymbol'];
                            $pemd=$_GET['email'];
                            echo $pemd;
                            $sql="UPDATE `joined_in` SET STATUS='aproved' WHERE TOKEN_SYMBOL='$token_symbol' AND EMAIL='$pemd';";
                            $result=mysqli_query($con,$sql);
                             if($result){
                           echo"update succefully";
                            header("location:claimdetail.php");
                          

     
      
     } 
  else {
     die(mysqli_error($con));
       }
                            

                            ?>
