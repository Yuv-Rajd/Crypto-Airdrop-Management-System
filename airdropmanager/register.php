<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<style>
    .modal-content {
        justify-self: center;

    margin: 5% auto 15% auto;
    border-color:transparent;
    outline:0px;
    width: 100%;
}
.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
} 
        body{
            background:rgba(239,243,233,255);
        }
.main33{
    background:rgba(239,243,233,255);
   margin: 10px 10% 10px 10%;
   padding: 25px 25px 25px 25px;
   display: flex;
   justify-content: center;
}


    

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
@media screen and(max-width: 100px){
    span.psw {
       display: block;
       float: none;
    }
 @keyframes floati{
    from {
      tranform:blue;
    }to{
      tranform:red;
    }
    
  }
}
.rglast{
  display: inline-flex;
  justify-content: center;
  wrap:center;
  margin: 2px;
  padding: 10px;

}
        

    
</style>
<body>
  <div class="main33">

  <div>

    <div class="modal-content animate">
      <h2> welcome to crypto airdrp</h2>
      <h4> subscription for crypto airdrops auto claim manager is free!!!</h4>
      <h4> fill  your details <span style="color:red">correctly</span></h4>
      <form action="register.php" method="post">
        <!-- <input type="text" class = "tr"
        placeholder =  "enter your name"name= "name"autocompete ="off" required > -->
        <div class="rgcontainer">
          
          <div class="rgdetails">
            <label for="">email<span style="color:red">*</span></label>  <br>
            <input type="email"class="" placeholder=" enter your email"name ="email" autocomplete="off" required><br><br>
            <label for="">name<span style="color:red">*</span></label><br>
            <input type="text"class="" placeholder=" enter your name"name ="name" autocomplete="off" required><br><br>
            <label for="">password<span style="color:red">*</span></label><br>
            <input type="password"class="" placeholder="set your password"name ="password" autocomplete="off" required><br><br>
            <label for="">telegram<span style="color:red">*</span></label><br>
            <input type="text"class="" placeholder="(ex:@username)"name ="telegram" autocomplete="off" required><br><br>
            <label for="">twitter<span style="color:red">*</span></label><br>
            <input type="text"class="" placeholder="(ex:@username"name ="twitter" autocomplete="off" required><br><br>
            <label for="">facebook</label><br>
            <input type="text"class="" placeholder=" facebook profile link"name ="fb" autocomplete="off"><br><br>
            <label for="">mobile_no<span style="color:red">*</span></label><br>
            <input type="text"class="" placeholder="mobile number"name ="mobile" autocomplete="off" required pattern="[0-9]{10}"><br><br>
            <label for="">BSC BEP20 address<span style="color:red">*</span></label><br>
            <input type="text"class="" placeholder=" BNB smart chain address"name ="bsc" autocomplete="off" required><br>
          </div>
          <input type="checkbox"><label for="">I agree all the privacy policy and data security</label> <br><br>
          <!-- <input type="button" onclick="alert('Hello World!')" value="Click Me!"> -->
          <div class="rglast">
            <input type="reset"> <br>
           <button  style="background-color:red" class="btn btn-primary"><a style="text-decoration:none" href="login.php"class="text-light">Go Back</a></button>
            <input type="submit" name="submit">
          </div>
        </div>
        
      </form>
    </div>
    <?php
          include "connect1.php";
          
          if(isset($_POST['name']))
          { 
            $email=$_POST['email'];
            $name=$_POST['name'];
            $password=$_POST['password'];
            $telegram=$_POST['telegram'];
            $twitter=$_POST['twitter'];
            $fb=$_POST['fb'];
            $mobile=$_POST['mobile'];
            $bsc=$_POST['bsc'];
            
            $sql= "insert into participants values('','$email','$name','$password','$telegram','$twitter','$fb',$mobile,'$bsc');";
            $result = mysqli_query($con,$sql);
            if($result){
              echo"succesfull";
              
            }else{
              echo"error in registering,try again later!";
              
            }
          }
          ?>
</div></div>
</body>
</html>