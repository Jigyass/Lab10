<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j597s263", "aPhoh3ra", "j597s263");
if ($mysqli->connect_errno){
  printf("Connect failed:%s\n", $mysqli->connect_error);
  exit();
}
$name = $_POST["users"];
$new = "SELECT * FROM Posts WHERE author_Id = '$name'";
$result = $mysqli->query($new);
echo "<table>
  <tr>
    <th>ID</th>
    <th>Post</th>
  </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["post_Id"]. "</td><td>" .$row["content"]."</td></tr>";
  }
echo "</table>";
$mysqli->close();
?>