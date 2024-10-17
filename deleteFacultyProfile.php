<?php
    include ("connection.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `faculty_profile` where id=$id";
        $conn->query($sql);
        if($sql){
            echo '<script>
            window.location.href = "deleteviewFacultyProfile.php"
            alert ("Deleted Successfully");
            </script>';
          }else{
            echo '<script>
            window.location.href = "facultyprofile.php"
            alert("Could not delete the data some error!!!")
            </script>';
      }
    }
    
  
?>