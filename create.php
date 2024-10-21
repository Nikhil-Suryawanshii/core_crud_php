<!-- create.php -->
<form action="create.php" method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Roll No: <input type="number" name="roll_no" required><br>
    <input type="submit" name="submit" value="Create Student">
</form>

<?php

include 'conn_db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll_no = $_POST['roll_no'];

    $sql = "INSERT INTO students (name, email, roll_no) VALUES ('$name', '$email', '$roll_no')";
   
    if ($conn->query($sql) === TRUE) {
        echo "New student created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
