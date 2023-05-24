<?php
require '../config.php';

$name = $_POST['name'];
$report = $_POST['report'];

// Insert the data into the "request" table
$sql = "INSERT INTO report (id, name, report) VALUES ('','$name','$report')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Your Report has been sended to our staff team.'); window.history.back();</script>";
} else {
    echo "<script> alert('Error: '); </script>";
    // . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>