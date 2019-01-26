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

$sql = "INSERT INTO pesanan (id_pemesanan,pemesan,ponsel,asal,lat,lng,tujuan,lat_tujuan,long_tujuan,jarak) VALUES ('$_POST[id]','$_POST[pemesan]','$_POST[ponsel]','$_POST[jemput]','$_POST[lat]','$_POST[long]','$_POST[tujuan]','$_POST[lat_tujuan]','$_POST[long_tujuan]','$_POST[jarak]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<?php
header("location:lengkap.php?id_pemesanan=$_POST[id]");
?>
