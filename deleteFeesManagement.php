<?php
    include ("connection.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `fees_management` where id=$id";
        $conn->query($sql);
        if($sql){
            echo '<script>
            window.location.href = "viewFeesManagement.php"
            alert ("Deleted Successfully");
            </script>';
          }else{
            echo '<script>
            window.location.href = "fees.php"
            alert("Could not delete the data some error!!!")
            </script>';
      }
    }
    
  
?>