<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "proyekakhir";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn) {
	echo "";
}
else{
	echo "Tidak";
}

?>