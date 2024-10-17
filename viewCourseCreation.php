<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="create.css">
</head>
<body>
<div >
      <a href='coursecreation.php'>Back</a>
      
</div>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Course</th>
      <th>Semester</th>   
      <th>Subjects</th>   
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
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>

