<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name Table</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 10px auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #acc;
        }
    </style>
</head>
<body>
    <h1>Youth Bountiful Temple Baptisms</h1>

    <!-- Display names from the database -->
    <h2>* October 25 Sign Up *</h2>
    <table>
        <thead>
            <tr>
                <th>Leader / Youth</th>
                <th>Church @ 5:15 PM Temple @ 6:00 PM</th>
                <th>Church @ 5:45 PM Temple @ 6:30 PM</th>
                <th>Church @ 6:15 PM Temple @ 7:00 PM</th>
                <th>Church @ 6:45 PM Temple @ 7:30 PM</th>
            </tr>
        </thead>
        <tbody>
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
                echo "<tr><td colspan='4'>No names found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            // Make table cells editable on click
            $(".editable").on("click", function() {
                $(this).attr("contenteditable", true).focus();
            });

            // Update the database when a cell loses focus (blur event)
            $(".editable").on("blur", function() {
                var id = $(this).data("id");
                var column = $(this).data("column");
                var newValue = $(this).text();

                $.ajax({
                    url: "updateName.php",
                    method: "POST",
                    data: { id: id, column: column, newValue: newValue },
                    success: function(data) {
                        console.log(data); // Log the server response (for debugging)
                    }
                });
            });
        });
    </script>
</body>
</html>
