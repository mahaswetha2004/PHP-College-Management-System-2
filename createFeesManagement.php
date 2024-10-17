<?php
     include("connection.php");
     if(isset($_POST['submit'])){
        
        $course = $_POST['course'];
        $amount = $_POST['amount'];
       
       
        if($course!=""&&$amount!=""){
        $q = " INSERT INTO `fees_management` (`course`, `amount`) VALUES ( '$course', '$amount' )";

        $query = mysqli_query($conn,$q);
        if($query){
          echo '<script>
          window.location.href = "viewFeesManagement.php"
          alert ("Created Successfully");
          </script>';
        }else{
          echo '<script>
          window.location.href = "createFeesManagement.php"
          alert("Could not insert the data some error!!!")
          </script>';
    }
  }
    
     }
?>

<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="csmall.css">
</head>
<body>
 
 <form method="post" class="form">
            <h1>Fees Details</h1>

            
<input type="text" name="course"  class="box" placeholder=" Course">

<input type="text" name="amount"  class="box" placeholder="Amount">



<input type="submit" name="submit" placeholder="Submit" id="submit">
    
<button type="submit" name="cancle" class="box" href="student.php">Cancle </button>
    


        </form>

</body>
</html>

