<?php
    $servername ="localhost";
    $username="root";
    $password="";
    $db_name="Website";
    $conn=new mysqli($servername,$username,$password,$db_name,3306);
    if($conn->connect_error){
       die("connection failed".$conn->connect_error);
    }
    echo "connected";
?>