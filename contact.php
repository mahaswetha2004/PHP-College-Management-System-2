<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        
        $course = $_POST['name'];
        $semester = $_POST['email'];
        $subjects = $_POST['quries'];
        
               
        if($name!=""&&$email!=""&&$quries!=""){

        
        $q = " INSERT INTO `contact` (`name`, `email`, `quries`) VALUES ( '$name', '$email', '$quries' )";
        $query = mysqli_query($conn,$q);



        }

        if($query){
          echo '<script>
          window.location.href = "index.php"
          alert ("Submitted");
          </script>';
        }
        else{
          echo '<script>
          window.location.href = "index.php"
          alert("Could not submitted!!!")
          </script>';
    }
  }
    
     
?>




<html>
<head>
    <title>University Website</title>
    <link rel="stylesheet" href="cMsmall.css">
</head>
<body>

<form method="post" class="form">
        <h1>Contact Us</h1>

        
<input type="text" name="name"  class="box" placeholder=" Name">

<input type="text" name="email"  class="box" placeholder="Email">

<textarea name="quries"  rows="5" cols="40" class="box" placeholder="Quries"></textarea> <br>

<input type="submit" name="submit" placeholder="Submit" href="index.php" id="submit">





    </form>

</body>
</html>



