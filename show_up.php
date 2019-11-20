<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kospin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_file, name_files, link_files FROM upload";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Link</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_file"]. "</td><td>" . $row["name_files"]. "</td><td>" . $row["link_files"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<a href="upload.php">Upload</a>
<a href="list.php">Download</a>
<a href="index.php">Balik Home</a>
</body>
</html>
