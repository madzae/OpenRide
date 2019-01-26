<?php
error_reporting(0);
?>
<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ride-Sharing</title>

<style>
#container {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  }
#top_div {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 50%;
  background-color:#4151BA;
  }
#bottom_div {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  bottom: 0;
  background-color:#ffff;
  }
#center {
  text-align: center;
    }
h2 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 26px;
  font-weight:500;
  letter-spacing: 3px;
  color: #646568;
  line-height: 1.5em;
  margin: 10px 5px;
  }
h3 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 12px;
  font-weight:300;
  letter-spacing: 3px;
  text-decoration: underline;
  color: #ffff;
  line-height: 1.5em;
  margin: 10px 5px;
  cursor: pointer;
  }
h4 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 36px;
  font-weight:700;
  letter-spacing: 3px;
  color: #ffff;
  line-height: 1.1em;
  margin: 10px 5px;
  }
h5 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 20px;
  font-weight:600;
  letter-spacing: 2px;
  color: #323338;
  line-height: 1em;
  margin: 10px 18px;
  }
h6 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 18px;
  font-weight:500;
  letter-spacing: 2px;
  color: #323338;
  line-height: 1em;
  margin: 10px 18px;
  }
h7 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 32px;
  font-weight:700;
  letter-spacing: 2px;
  color: #323338;
  line-height: 1em;
  margin: 10px 18px;
  }
input[type=text] {
 border: none;
 border-bottom: 1px solid #4151BA;
 width: 60%;
 padding: 15px 22px;
 margin: 10px 5px;
-webkit-transition: width 0.5s ease-in-out;
transition: width 0.5s ease-in-out;
}
input[type=text]:focus {
width: 80%;
}
input[type=button], input[type=reset], input[type=submit] {
    background-color: #4151BA;
    border: none;
    color: white;
    padding: 18px 36px;
    text-decoration: none;
    margin: 5px 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #4589f7;
}
</style>

</head>
<body>
	<div id="container">
    <div id="top_div">
 		 <br>
 		 <p align="right" style="color:white;font-family:courier;">OpenRide&nbsp;</p>
 		 <br>
 		 <br>
<?php
$id = $_GET['ponsel_pemesan'];
$mysqli = new mysqli("localhost", "root", "", "mad");
$query = "SELECT * FROM aktif WHERE ponsel_pemesan ='". $id."' ORDER BY id DESC";
$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
 {
 echo "<center><h4>Bang ojek sebentar lagi tiba!</h4></center>
       <center><a href='https://www.google.com/maps/dir/?api=1&origin=$row[lng_penjemputan],$row[lat_penjemputan]&destination=$row[lng_tujuan],$row[lat_tujuan]'><h3>Lihat peta >></h3></a></center>
       </div>
       <div id='bottom_div'>";
 echo "<p align='left' style=0000;font-family:courier>&nbsp;Rincian pengemudi:</p>";
 echo "<center><h7>$row[nama_pengemudi]</h7>";
 echo "<br>";
 echo "<br>";
 echo "<h5>$row[nopol_pengemudi]</h5>";
 echo "<h6>$row[motor_pengemudi]</h6>";
 echo "<p>Perjalanan menempuh jarak ". floor($row[jarak] / 1000). " km";
 echo "&nbsp;dengan tarif Rp".floor($row[jarak] / 1000)*$row[tarif]. ".";
 echo "<br>";
 echo "<a href='https://wa.me/$row[ponsel_pengemudi]?text=Hallo&#44%20Saya%20$row[nama_pemesan]&#46;'><img src='wa-logo.png' height='32' width='32' alt='Kirim pesan via WhatsApp'></a>";
 echo "<form method='post' name='pesanan' action='selesai.php'>";
 echo "<input type='hidden' name='id' value='$row[id]'>";
 echo "<input type='submit' value='Perjalanan Selesai' alt='submit'>";
		}
?>
</div>
</div>

</body>
</html>
