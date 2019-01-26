
<?php

$jsonurl = "http://photon.komoot.de/api/?q=jalan+masjid+al+mujahidin&limit=1";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json, true);

echo $json_output['features'][0]['properties']['name'];
echo "<p>";
echo $json_output['features'][0]['geometry']['coordinates'][0]; echo ",";
echo $json_output['features'][0]['geometry']['coordinates'][1];

?>
