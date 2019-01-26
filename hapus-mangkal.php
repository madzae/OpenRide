<?php
session_start();
?>
<?php
$kunci = $_POST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM kendaraan WHERE id=$kunci";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    header("location:index.php");
}
//header("location:aktif.php?ponsel_pemesan=$_POST[ponsel]");
$conn->close();
?>
