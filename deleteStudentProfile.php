<?php
    include ("connection.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `student_profile` where id=$id";
        $conn->query($sql);
        if($sql){
            echo '<script>
            window.location.href = "deleteviewStudentProfile.php"
            alert ("Deleted Successfully");
            </script>';
          }else{
            echo '<script>
            window.location.href = "studentprofile.php"
            alert("Could not delete the data some error!!!")
            </script>';
      }
    }
    
  
?>