<?php
    include("connection.php");
    if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $role=$_POST['roles'];
    $sql="select * from login where username = '$username' and password= '$password' and role='$role' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        if($role=="admin"){
        header("Location:home3.php");
        }elseif($role=="student"){
            header("Location:home1.php");
        }elseif($role=="faculty"){
            header("Location:home2.php");
        }
    }else{
        echo '<script>
        window.location.href = "index.php"
        alert("Login failed.Invalid username or password!!!")
        </script>';
    }
    }
?>
