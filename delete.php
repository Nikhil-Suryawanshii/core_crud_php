<!-- delete.php -->
<?php
include 'conn_db.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
