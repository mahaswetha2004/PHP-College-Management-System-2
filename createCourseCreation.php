<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $subjects = $_POST['subjects'];
       
        if($course!=""&&$semester!=""&&$subjects!=""){
        $q = " INSERT INTO `course_creation` (`course`, `semester`, `subjects`) VALUES ( '$course', '$semester', '$subjects' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewCourseCreation.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createCourseCreation.php"
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
            <h1>Courses</h1>

            
<input type="text" name="course"  class="box" placeholder=" Course">

<input type="text" name="semester"  class="box" placeholder="Semester">

<textarea name="subjects"  rows="5" cols="40" class="box" placeholder="Subjects"></textarea> <br>

<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="student.php">Cancle </button>
    


        </form>

</body>
</html>

