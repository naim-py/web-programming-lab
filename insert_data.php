<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "Student");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert sample data
$sql = "INSERT INTO Semester_Reg (ID, Name, Session, Phone_No, City, Gender)
VALUES ('S001', 'John Doe', '2017-2018', '1234567890', 'Pabna', 'Male'),
       ('S002', 'Jane Doe', '2017-2018', NULL, 'Dhaka', 'Female'),
       ('S003', 'Bob Smith', '2018-2019', '9876543210', 'Chittagong', 'Male')";

if (mysqli_query($conn, $sql)) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
insert_data.php