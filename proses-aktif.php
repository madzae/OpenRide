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

$sql = "INSERT INTO aktif (nama_pemesan, ponsel_pemesan, lokasi_penjemputan, lat_penjemputan, lng_penjemputan, lokasi_tujuan, lat_tujuan, lng_tujuan, nama_pengemudi, ponsel_pengemudi, motor_pengemudi, nopol_pengemudi, tarif, jarak) VALUES ('$_POST[pemesan]','$_POST[ponsel]','$_POST[asal]','$_POST[lat]','$_POST[lng]','$_POST[tujuan]','$_POST[lat_tujuan]','$_POST[lng_tujuan]','$_POST[pengemudi]','$_POST[ponsel_pengemudi]','$_POST[motor]','$_POST[nopol]','$_POST[tarif]','$_POST[jarak]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mad";
$kunci= $_POST['ponsel_pengemudi'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM kendaraan WHERE ponsel=$kunci";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mad";
$kuncix= $_POST['ponsel'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM pesanan WHERE ponsel=$kuncix";

if ($conn->query($sql) === TRUE) {
    header("location:aktif.php?ponsel_pemesan=$_POST[ponsel]");
} else {
    header("location:index.php");
}
$conn->close();
?>
