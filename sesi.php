<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$nama = $_POST['nama'];
$ponsel = $_POST['ponsel'];

$_SESSION["nama"] = $nama;
$_SESSION["ponsel"] = $ponsel;

echo "Halo " . $_SESSION["ponsel"];
?>
</body>
</html>
<?php
header("location:home.php");
?>
