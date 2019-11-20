<!DOCTYPE html>
<html>
<head>
	<title>List Data</title>
</head>
<body>
	<h2>List Data</h2>
	<?php
		include "conn.php";
 
		$sql = "SELECT * FROM upload ORDER BY id_file DESC";
		$query = mysqli_query($conn, $sql) or die (mysqli_error());
		while($data = mysqli_fetch_array($query)){
			echo "Nama File: <b>$data[name_files]</b>";
			echo "<br>";
			echo "<a href='download.php?file=$data[name_files]'>Download</a>";
			echo "<br>";
		}
	?>
 
	<a href="upload.php">Upload File</a>
 
</body>
</html>