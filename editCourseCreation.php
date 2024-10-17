<?php
  include ("connection.php");
  $id="";
  $course="";
  $semester="";
  $subjects="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/coursecreation.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from course_creation where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/coursecreation.php");
      exit;
    }
    $course=$row["course"];
    $semester=$row["semester"];
    $subjects=$row["subjects"];
  }
  else{
    $id = $_POST["id"];
    $course=$_POST["course"];
    $semester=$_POST["semester"];
    $subjects=$_POST["subjects"];
    

    $sql = "update course_creation set course='$course', semester='$semester', subjects='$subjects' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewCourseCreation.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "coursecreation.php"
      alert("Could not updated the data some error!!!")
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
 
 <form  method="post"  class="form">
            <h1> Edit Course</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">

<input type="text" name="course"  class="box" value="<?php echo $course; ?>" placeholder=" Course">

<input type="text" name="semester"  class="box" value="<?php echo $semester; ?>" placeholder="Semester">

<textarea name="subjects"  rows="5" cols="40" class="box" value="<?php echo $subjects; ?>" placeholder="Subjects"></textarea> <br>

    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="coursecreation.php">Cancle </button>

    
    
        </form>

</body>
</html>


