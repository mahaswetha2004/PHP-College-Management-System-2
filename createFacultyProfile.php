<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $qualification = $_POST['qualification'];
      
       
        if($name!=""&&$email!=""&&$phone!=""&&$qualification!=""){
        $q = " INSERT INTO `faculty_profile` (`name`, `email`,  `phone`, `qualification`) VALUES ( '$name','$email','$phone','$qualification' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewFacultyProfile.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createFacultyProfile.php"
          alert("Could not insert the data some error!!!")
          </script>';
    }
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
            <h1>Faculty Profile</h1>

            <input type="text" name="name"  class="box" placeholder="Name">

<input type="text" name="email"  class="box" placeholder="Email">

<input type="text" name="phone"  class="box" placeholder="Phone">

<input type="text" name="qualification"  class="box" placeholder="Qualification">

<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="facultyprofile.php">Cancle </button>
    


        </form>

</body>
</html>

