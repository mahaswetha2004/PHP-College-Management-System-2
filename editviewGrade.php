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
      <th>Register Number</th>
      <th>Internal Mark</th>
      <th>External Mark</th>
        <th>Total</th>
        <th>Result</th>
        <th>Action</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    include("connection.php");
    $sql = "select*from grade";
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
      <td>$row[internalmark]</td>
      <td>$row[externalmark]</td>
      <td>$row[total]</td>
      <td>$row[result]</td>
      <td>
      <a href='editGrade.php?id=$row[id]'>Edit</a>
      </td>
      
    </tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>
