<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $regno = $_POST['regno'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $place = $_POST['place'];
        $dob = $_POST['dob'];
       
       
        if($name!=""&&$regno!=""&&$course!=""&&$email!=""&&$phone!=""&&$fathername!=""&&$mothername!=""&&$place!=""&&$dob!=""){
        $q = " INSERT INTO `student_profile` (`name`, `regno`, `course`, `email`,  `phone`, `fathername`,`mothername`,`place`,`dob`) VALUES ( '$name','$regno','$course', '$email','$phone','$fathername','$mothername','$place','$dob' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewStudentProfile.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createStudentProfile.php"
          alert("Could not insert the data some error!!!")
          </script>';
    }
  }
    
     }
?>

<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="clarge.css">
</head>
<body>
 
 <form method="post" class="form">
            <h1>Student Profile</h1>

            <input type="text" name="name"  class="box" placeholder="Name">

            <input type="text" name="regno" class="box" placeholder="Register Number">

<input type="text" name="course"  class="box" placeholder=" Course">

<input type="text" name="email"  class="box" placeholder="Email">

<input type="text" name="phone"  class="box" placeholder="Phone">

<input type="text" name="fathername"  class="box" placeholder="Fathername">

<input type="text" name="mothername"  class="box" placeholder="Mothername">

<input type="text" name="place" class="box" placeholder="Place" >

<input type="date" name="dob" class="box" placeholder="Date Of Birth">

<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="studentprofile.php">Cancle </button>
    


        </form>

</body>
</html>

