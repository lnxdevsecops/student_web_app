<?php
$conn = new mysqli("localhost", "root", "Linux.adm@1", "new_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, student_name, score FROM scores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["student_name"] . "</td>";
        echo "<td>" . $row["score"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No records found</td></tr>";
}

$conn->close();
?>

