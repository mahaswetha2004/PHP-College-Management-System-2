<?php
  include ("connection.php");
  $id="";
  $name="";
  $regno="";
  $internalmark="";
  $externalmark="";
  $total="";
  $result="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:project/grade.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from grade where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: project/grade.php");
      exit;
    }
    $name=$row["name"];
    $regno=$row["regno"];
    $internalmark=$row["internalmark"];
    $externalmark=$row["externalmark"];
    $total=$row["total"];
    $result=$row["result"];

   

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $regno=$_POST["regno"];
    $internalmark=$_POST["internalmark"];
    $externalmark=$_POST["externalmark"];
    $total=$internalmark+$externalmark;
    if($internalmark>=20&&$externalmark>=20){
        $result="PASS";
    }else{
        $result="FAIL";
    }
    
    

    $sql = "update grade set  name='$name', regno='$regno', internalmark='$internalmark',externalmark='$externalmark',total='$total',result='$result' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo '<script>
      window.location.href = "viewGrade.php"
      alert ("Updated Successfully");
      </script>';
    }else{
      echo '<script>
      window.location.href = "grade.php"
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
            <h1> Edit Grade</h1>

            



            <input type="hidden" name="id"  class="box" value="<?php echo $id; ?>">


<input type="text" name="name"  class="box" value="<?php echo $name; ?>" placeholder="Name">

<input type="text" name="regno"  class="box" value="<?php echo $regno; ?>" placeholder="Register Number">

<input type="text" name="internalmark"  class="box" value="<?php echo $internalmark; ?>" placeholder="Internal Mark">

<input type="text" name="externalmark"  class="box" value="<?php echo $externalmark; ?>" placeholder="External Mark">

 
    <button type="submit" name="submit" class="box"> Submit </button>
<button type="submit" name="cancle" class="box" href="grade.php">Cancle </button>

    
        <button>
        </form>

</body>
</html>

