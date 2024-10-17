<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="editview.css">
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Course</th>
      <th>Semester</th>   
      <th>Subjects</th> 
      <th>Action</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from course_creation";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[course]</td>
      <td>$row[semester]</td>
      <td>$row[subjects]</td>
      <td>
      <a href='editCourseCreation.php?id=$row[id]'>Edit</a>
      </td>
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>

