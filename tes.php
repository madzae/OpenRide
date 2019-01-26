<?php

$jemput = $_POST['jemput'];
$tujuan = $_POST['tujuan'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$lat_tujuan = $_POST['lat_tujuan'];
$long_tujuan = $_POST['long_tujuan'];
$id = rand();

<form method='post' name='pesanan' action='lengkap.php'>
<input type='hidden' name='id' value='$id'>
<input type='submit' value='Tinjau Perjalanan Anda' alt='submit'>
