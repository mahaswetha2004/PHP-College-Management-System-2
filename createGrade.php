<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $regno=$_POST['regno'];
        $internalmark = $_POST['internalmark'];
        $externalmark = $_POST['externalmark'];
        $total=$internalmark+$externalmark;
        if($internalmark>=20&&$externalmark>=20){
            $result="PASS";
        }else{
            $result="FAIL";
        }
        
       
       
        if($name!=""&&$regno!=""&&$internalmark!=""&&$externalmark!=""&&$total!=""&&$result!=""){
        $q = " INSERT INTO `grade` (`name`, `regno`, `internalmark`,  `externalmark`, `total`,`result`) VALUES ( '$name','$regno', '$internalmark','$externalmark','$total','$result' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewGrade.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createGrade.php"
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
            <h1>Student Grade</h1>

            <input type="text" name="name"  class="box" placeholder="Name">

<input type="text" name="regno"  class="box" placeholder=" RegisterNumber">

<input type="text" name="internalmark"  class="box" placeholder="Internal Mark">

<input type="text" name="externalmark"  class="box" placeholder="External Mark">



<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="grade.php">Cancle </button>
    


        </form>

</body>
</html>

