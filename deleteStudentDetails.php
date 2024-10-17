<?php
    include ("connection.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `student_details` where id=$id";
        $conn->query($sql);
        if($sql){
            echo '<script>
            window.location.href = "deleteviewStudentDetails.php"
            alert ("Deleted Successfully");
            </script>';
          }else{
            echo '<script>
            window.location.href = "student.php"
            alert("Could not delete the data some error!!!")
            </script>';
      }
    }
    
  
?>