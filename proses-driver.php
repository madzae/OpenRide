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

$sql = "INSERT INTO kendaraan (id_kendaraan,mangkal,lat,lng,nama,ponsel,motor,nopol,tarif) VALUES ('$_POST[id]','$_POST[mangkal]','$_POST[lat]','$_POST[lng]','$_POST[nama]','$_POST[ponsel]','$_POST[motor]','$_POST[nopol]','$_POST[tarif]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<?php
header("location:aktif-driver.php?ponsel_pengemudi=$_POST[ponsel]");
?>
