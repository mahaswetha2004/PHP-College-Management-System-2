<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="create.css">
</head>
<body>
<div >
      <a href='studentprofile.php'>Back</a>
      
</div>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Register Number</th>
      <th>Course</th>
      <th>Email</th>
      <th>Phone</th>
        <th>Fathername</th>
        <th>Mothername</th>
        <th>Place</th>
        <th>Date Of Birth</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from student_profile";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[regno]</td>
      <td>$row[course]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[fathername]</td>
      <td>$row[mothername]</td>
      <td>$row[place]</td>
      <td>
      <a href='deleteStudentProfile.php?id=$row[id]'>Edit</a>
      </td>
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
