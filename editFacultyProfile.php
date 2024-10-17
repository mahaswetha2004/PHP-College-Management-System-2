
<?php
  include ("connection.php");
  $id="";
  $name="";
  $email="";
  $phone="";
  $qualification="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/facultyprofile.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from faculty_profile where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/facultyprofile.php");
      exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];
    $qualification=$row["qualification"];
   

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $qualification=$_POST["qualification"];
    

    $sql = "update faculty_profile set name='$name', email='$email', phone='$phone',qualification='$qualification' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewFacultyProfile.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "facultyprofile.php"
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
            <h1> Edit Faculty Profile</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">


<input type="text" name="name"  class="box" value="<?php echo $name; ?>" placeholder="Name">

<input type="text" name="email"  class="box" value="<?php echo $email; ?>" placeholder="Email">

<input type="text" name="phone"  class="box" value="<?php echo $phone; ?>" placeholder="Phone">

    <input type="text" name="qualification"  class="box" value="<?php echo $qualification; ?>" placeholder="Qualification">

    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="facultyprofile.php">Cancle </button>

    
        <button>
        </form>

</body>
</html>

