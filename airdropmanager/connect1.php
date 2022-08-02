<?php 
        $servername="localhost:3308";
        $username="root";
        $password="";
        $dbname="apms1";

        $con= mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            die(" error in connecting database");
        }
?>