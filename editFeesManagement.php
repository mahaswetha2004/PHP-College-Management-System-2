<?php
  include ("connection.php");
  $id="";
  $course="";
  $amount="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/fees.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from fees_management where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/fees.php");
      exit;
    }
    $course=$row["course"];
    $amount=$row["amount"];

  }
  else{
    $id = $_POST["id"];
    $course=$_POST["course"];
    $amount=$_POST["amount"];
    
    

    $sql = "update fees_management set course='$course', amount='$amount' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewFeesManagement.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "fees.php"
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
            <h1> Edit Fees Details</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">

<input type="text" name="course"  class="box" value="<?php echo $course; ?>" placeholder=" Course">

<input type="text" name="amount"  class="box" value="<?php echo $amount; ?>" placeholder="Amount">

    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="student.php">Cancle </button>

    
    
        </form>

</body>
</html>

