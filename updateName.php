<?php
$servername = "sql3.freesqldatabase.com";
$username = "sql3651361";
$password = "fNNigty7qc";
$dbname = "sql3651361";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id']) && isset($_POST['column']) && isset($_POST['newValue'])) {
    $id = $_POST['id'];
    $column = $_POST['column'];
    $newValue = $_POST['newValue'];

    // Prepare and execute the SQL update statement
    $sql = "UPDATE data SET $column = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newValue, $id);

    if ($stmt->execute()) {
        echo "Name updated successfully!";
    } else {
        echo "Error updating name: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
