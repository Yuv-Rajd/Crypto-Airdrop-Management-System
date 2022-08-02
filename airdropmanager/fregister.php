
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>float login</title>
  </head>
  
<style>

/* Full-width input fields */

input[type=text],
input[type=email],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
body{
    background-image: url('image/AirDrop.png');
    background-size:cover;
}

/* Set a style for all buttons */

button {
    background-color: #48d1cc;
    color: red;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.as{
  animation:floati;
  text-decoration:None;
}
.as:hover{
          color:red;
        }


/* Center the image and position
the close button */



.container {
    padding: 16px;
    border-radius:50px;
    outline:0px;
    box-shadow:0 5px 8px 0 rgba(0,0,0,1);
}
.focus{
    outline:0px;
}
.tr{
    background-color:transparent;
    color:black;
    /* border-color:red; */
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */

.modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 50px;
   height: 50px;
   overflow: auto;
   background-color:rgba(0,0,0);
   opacity: 0.5;
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}


.modal-content {
    background-color: transparent;

    
    margin: 5% auto 15% auto;
    border-color:transparent;
    outline:0px;
    /* border: 1px solid #888; */
    width: 50%;
}

/* The Close Button (x) */




/* Add Zoom Animation */ 

.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel
button on extra small screens */ 

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
</style>
<body>


<form class ="modal-content animate"  method="post" autocomplete="off">

 <div class="container focus">

     <div class="tr ">
    <label ><b>Name<span style="color:red">*</span></b></label>
    <br>
    <input type="text" class = "tr"
    placeholder =  "enter your name"name= "name"autocompete ="off" required >
  </div>
<div class="tr">
    <label ><b>Email<span style="color:red">*</span></b></label>
    <br>
    <input type="email" class = "tr"
    placeholder =  "enter your email"name= "email"autocompete ="off" required>
   </div>
  <br>
<div class="tr">
    <label ><b>Password<span style="color:red">*</span> </b></label>
    <br>
    <input type="password" class = "tr"
    placeholder =  "enter your password"name= "password"autocompete ="off" required>
  </div>
  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
  



  </form>
  
   
  
 <a class="as" href = "#" ><p align = right> cancel</p></a>
 
</div>


<?php include'footer.php';  ?>

     

  </body>
</html>