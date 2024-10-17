<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="create.css">
</head>
<body>
<div >
      <a href='faculty.php'>Back</a>
      
</div>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Department</th>
      <th>Email</th>
      <th>Phone</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from faculty_details";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[department]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[username]</td>
      <td>$row[password]</td>
      <td>$row[role]</td>
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
