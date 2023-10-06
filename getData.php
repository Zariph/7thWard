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

// Retrieve all names from columns Name1, Name2, Name3, and Name4
$sql = "SELECT Title, Name1, Name2, Name3, Name4, id FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='editable' data-id='" . $row["id"] . "' data-column='Title'>" . $row["Title"] . "</td>";
        echo "<td class='editable' data-id='" . $row["id"] . "' data-column='Name1'>" . $row["Name1"] . "</td>";
        echo "<td class='editable' data-id='" . $row["id"] . "' data-column='Name2'>" . $row["Name2"] . "</td>";
        echo "<td class='editable' data-id='" . $row["id"] . "' data-column='Name3'>" . $row["Name3"] . "</td>";
        echo "<td class='editable' data-id='" . $row["id"] . "' data-column='Name4'>" . $row["Name4"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No names found.</td></tr>";
}

$conn->close();
?>
