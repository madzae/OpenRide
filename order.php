<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
window.onload = function(){
    var button = document.getElementById('clickButton');
    button.form.submit();
}
</script>
</head>
<body hidden>
  <center>
<?php
$pemesan = $_SESSION['nama'];
$ponsel = $_SESSION['ponsel'];
$jemput = $_POST['jemput'];
$tujuan = $_POST['tujuan'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$lat_tujuan = $_POST['lat_tujuan'];
$long_tujuan = $_POST['long_tujuan'];
$id = rand();

$json = file_get_contents("http://router.project-osrm.org/route/v1/driving/$lat,$long;$lat_tujuan,$long_tujuan?overview=false");
$data = json_decode($json);

echo $jemput;
echo "<p>";
echo $tujuan;
echo "<p>";
echo "<form method='post' name='pesanan' action='proses.php'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='hidden' name='pemesan' value='$pemesan'>";
echo "<input type='hidden' name='ponsel' value='$ponsel'>";
echo "<input type='hidden' name='jemput' value='$jemput'>";
echo "<input type='hidden' name='lat' value='$lat'>";
echo "<input type='hidden' name='long' value='$long'>";
echo "<input type='hidden' name='tujuan' value='$tujuan'>";
echo "<input type='hidden' name='lat_tujuan' value='$lat_tujuan'>";
echo "<input type='hidden' name='long_tujuan' value='$long_tujuan'>";
echo "<input type='hidden' name='jarak' value='".$data->routes[0]->distance; echo "'"; echo ">";
echo "<input type='submit' id='clickButton' value='Tinjau Perjalanan Anda' alt='submit'>";

?>
  </center>
</body>
</html>
