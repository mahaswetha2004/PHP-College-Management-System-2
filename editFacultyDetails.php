<?php
  include ("connection.php");
  $id="";
  $name="";
  $department="";
  $email="";
  $phone="";
  $username="";
  $password="";
  $role="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/faculty.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from faculty_details where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/faculty.php");
      exit;
    }
    $name=$row["name"];
    $department=$row["department"];
    $email=$row["email"];
    $phone=$row["phone"];
    $username=$row["username"];
    $password=$row["password"];
    $role=$row["role"];
   

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $department=$_POST["department"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $role=$_POST["role"];
    
    

    $sql = "update faculty_details set name='$name', department='$department', email='$email', phone='$phone',username='$username',password='$password',role='$role' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewFacultyDetails.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "faculty.php"
      alert("Could not updated the data some error!!!")
      </script>';
}
  }
  
?>



<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="view.css">
</head>
<body>
 
 <form  method="post"  class="form">
            <h1> Edit Faculty Details</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">


<input type="text" name="name"  class="box" value="<?php echo $name; ?>" placeholder="Name">

<input type="text" name="department"  class="box" value="<?php echo $department; ?>" placeholder=" Departmrnt">

<input type="text" name="email"  class="box" value="<?php echo $email; ?>" placeholder="Email">

<input type="text" name="phone"  class="box" value="<?php echo $phone; ?>" placeholder="Phone">

    <input type="text" name="username"  class="box" value="<?php echo $username; ?>" placeholder="Username">

    <input type="password" name="password" class="box" value="<?php echo $password; ?>" placeholder="Password" >

    <input type="text" name="role" class="box" value="<?php echo $role; ?>" placeholder="Role">
    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="student.php">Cancle </button>

    
        <button>
        </form>

</body>
</html>

