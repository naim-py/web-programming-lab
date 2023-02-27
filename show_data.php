<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Semester_Reg";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Session</th><th>Phone_No</th><th>City</th><th>Gender</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Session"] . "</td><td>" . $row["Phone_No"] . "</td><td>" . $row["City"] . "</td><td>" . $row["Gender"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No records found";
}

mysqli_close($conn);