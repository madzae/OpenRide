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

$from = str_replace(" ","+",$_POST['pickup']);
$destination = $_POST['tujuan'];
$lat = $_POST['lat'];
$long = $_POST['long'];

$jsonurl = "http://photon.komoot.de/api/?q=$from&limit=1";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json, true);

echo $json_output['features'][0]['properties']['name'];
echo "<p>";
echo "<form method='post' name='pesanan' action='order.php'>";
echo "<input type='hidden' name='jemput' value='".$json_output['features'][0]['properties']['name']; "'";  echo "'"; echo ">";
echo "<input type='hidden' name='lat' value='".$json_output['features'][0]['geometry']['coordinates'][0]; "'";  echo "'"; echo ">";
echo "<input type='hidden' name='long' value='".$json_output['features'][0]['geometry']['coordinates'][1]; "'";  echo "'"; echo ">";
echo "<input type='hidden' name='tujuan' value='$destination'>";
echo "<input type='hidden' name='lat_tujuan' value='$lat'>";
echo "<input type='hidden' name='long_tujuan' value='$long'>";
echo "<p>";
echo "<input type='submit' id='clickButton' value='Tinjau Perjalanan Anda' alt='submit'>";

?>
  </center>
</body>
</html>
