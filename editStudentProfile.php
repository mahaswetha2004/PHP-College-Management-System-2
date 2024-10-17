<?php
  include ("connection.php");
  $id="";
  $name="";
  $regno="";
  $course="";
  $email="";
  $phone="";
  $fathername="";
  $mothername="";
  $place="";
  $dob="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/studentprofile.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from student_profile where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/studentprofile.php");
      exit;
    }
    $name=$row["name"];
    $regno=$row["regno"];
    $course=$row["course"];
    $email=$row["email"];
    $phone=$row["phone"];
    $fathername=$row["fathername"];
    $mothername=$row["mothername"];
    $place=$row["place"];
    $dob=$row["dob"];
   

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $regno=$_POST["regno"];
    $course=$_POST["course"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $fathername=$_POST["fathername"];
    $place=$_POST["place"];
    $dob=$_POST["dob"];
    
    

    $sql = "update student_profile set name='$name',regno='$regno', course='$course', email='$email', phone='$phone',fathername='$fathername',mothername='$mothername',place='$place',dob='$dob' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewStudentProfile.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "studentprofile.php"
      alert("Could not updated the data some error!!!")
      </script>';
}
  }
  
?>



<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="clarge.css">
</head>
<body>
 
 <form  method="post"  class="form">
            <h1> Edit Student Details</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">


<input type="text" name="name"  class="box" value="<?php echo $name; ?>" placeholder="Name">

<input type="text" name="regno"  class="box" value="<?php echo $regno; ?>" placeholder="Register Number">

<input type="text" name="course"  class="box" value="<?php echo $course; ?>" placeholder=" Course">

<input type="text" name="email"  class="box" value="<?php echo $email; ?>" placeholder="Email">

<input type="text" name="phone"  class="box" value="<?php echo $phone; ?>" placeholder="Phone">

    <input type="text" name="fathername"  class="box" value="<?php echo $fathername; ?>" placeholder="Fathername">

    <input type="text" name="mothername"  class="box" value="<?php echo $mothername; ?>" placeholder="Mothername">

    <input type="text" name="place" class="box" value="<?php echo $place; ?>" placeholder="Place" >

    <input type="date" name="dob" class="box" value="<?php echo $dob; ?>" placeholder="Date Of Birth">
    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="studentprofile.php">Cancle </button>

    
        <button>
        </form>

</body>
</html>



