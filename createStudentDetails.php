
<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
       
        if($name!=""&&$course!=""&&$email!=""&&$phone!=""&&$username!=""&&$password!=""&&$role!=""){
        $q = " INSERT INTO `student_details` (`name`, `course`, `email`,  `phone`, `username`,`password`,`role`) VALUES ( '$name','$course', '$email','$phone','$username','$password','$role' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewStudentDetails.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createStudentDetails.php"
          alert("Could not insert the data some error!!!")
          </script>';
    }
  }
    
     }
?>

<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="view.css">
</head>
<body>
 
 <form method="post" class="form">
            <h1>Student Details</h1>

            <input type="text" name="name"  class="box" placeholder="Name">

<input type="text" name="course"  class="box" placeholder=" Course">

<input type="text" name="email"  class="box" placeholder="Email">

<input type="text" name="phone"  class="box" placeholder="Phone">

<input type="text" name="username"  class="box" placeholder="Username">

<input type="password" name="password" class="box" placeholder="Password" >

<input type="text" name="role" class="box" placeholder="Role">

<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="student.php">Cancle </button>
    


        </form>

</body>
</html>

