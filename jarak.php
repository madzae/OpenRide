<?php

$json = file_get_contents("http://router.project-osrm.org/route/v1/driving/106.823872,-6.2664504;106.77372,-6.3820882?overview=false");
$data = json_decode($json);

echo "Jarak: ".round($data->routes[0]->distance/1000); echo "&nbsp Km";
echo "<p>";
echo "Rp ".round($data->routes[0]->distance/1000)*5000;
?>
