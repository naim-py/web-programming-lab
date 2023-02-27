<?php
// Establishing Connection with the MySQL Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Deleting a Record from the Semester_Reg Table
$id = 1; // ID of the record to be deleted
$sql = "DELETE FROM Semester_Reg WHERE ID = $id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Closing the Connection with the MySQL Database
mysqli_close($conn);
?>