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
      <th>Name</th>
      <th>Course</th>
      <th>Email</th>
      <th>Phone</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from student_details";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[course]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[username]</td>
      <td>$row[password]</td>
      <td>$row[role]</td>
      <td>
      <a href='editStudentDetails.php?id=$row[id]'>Edit</a>
      </td>
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
