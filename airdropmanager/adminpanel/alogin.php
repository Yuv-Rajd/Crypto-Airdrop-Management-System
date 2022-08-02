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
    <link href="login.css" rel="stylesheet" >
</head>
<style>
  body{
    background-image: url('image/1232.jpg');
    background-repeat:repeat;
    background-size:cover;
    
    
    
  }


</style>

<body>
    <div class="d-flex" id="wrapper">
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid px-4">
            <div class="body">
    <div class="divbd">
    <form method="post" action="" autocompete="off" >
    <div  class="admp"><h3> <a style="text-decoration:none" class="text-dark" href="..\login.php" >CRYPTO AIRDROP MANAGER!! </a></h3>
    <label ><b class="admp">admin-id<span style="color:red">*</span></b></label>
    <br>
    <input type="text" class ="admp" placeholder = "admin-id"name= "aid" autocompete ="off" required >
  </div>
  <div class="admp">
    <label ><b>password<span style="color:red">*</span></b></label>
    <br>
    <input type="text" class = "admp" placeholder =  "password"name= "password" autocompete ="off" required >
  </div> <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-primary " name ="submit">Submit</button> </div>
  </form>
  
  </div>
  </div>
 
    <?php
          include "connect.php";
                                  
          if(isset($_POST['submit']))
                  {
                            $aid=$_POST['aid'];
                            $password=$_POST['password'];
                            $sql= "select * from admin where admin_id='$aid' and pswd='$password';";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result)>0){
                                echo"succesfull";
                                header("location:index.php");
                            }else{
                                header("location:alogin.php");

                            }
             }
     ?>
           
  


                
                
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
