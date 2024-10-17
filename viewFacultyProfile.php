<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="create.css">
</head>
<body>
<div >
      <a href='facultyprofile.php'>Back</a>
      
</div>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Qualification</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from faculty_profile";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[qualification]</td>
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
