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

// Updating a Record in the Semester_Reg Table
$id = 1; // ID of the record to be updated
$new_city = "Dhaka"; // New value for the City field
$sql = "UPDATE Semester_Reg SET City='$new_city' WHERE ID=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Closing the Connection with the MySQL Database
mysqli_close($conn);
?>