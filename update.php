<!-- update.php -->
<?php
include 'conn_db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    Roll No: <input type="number" name="roll_no" value="<?php echo $row['roll_no']; ?>"><br>
    <input type="submit" name="submit" value="Update Student">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll_no = $_POST['roll_no'];

    $sql = "UPDATE students SET name='$name', email='$email', roll_no='$roll_no' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
