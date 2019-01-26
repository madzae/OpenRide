<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mad";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO pengemudi (nama,motor,nopol,ponsel) VALUES ('$_POST[nama]','$_POST[motor]','$_POST[nopol]','$_POST[ponsel]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<?php
header("location:login-driver.php");
?>
