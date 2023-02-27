<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Programmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all records from the table
$sql = "SELECT * FROM Stu_Reg";
$result = $conn->query($sql);

// Check if any records were found
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " - Image: " . $row["Image"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>