<!-- read.php -->
<?php

include 'conn_db.php';
$sql= "Select * from students";
// $sql = "SELECT id, name, email, roll_no, created_at, updated_at FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roll No</th>
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['roll_no'] . "</td>
                <td>
                    <a href='update.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
