<html>
    <head>
        <title>University Website</title>
        <link rel="stylesheet" href="create.css">
</head>
<body>
<div >
      <a href='fees.php'>Back</a>
      
</div>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Course</th>
      <th>Amount</th>    
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from fees_management";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[course]</td>
      <td>$row[amount]</td>
      
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
