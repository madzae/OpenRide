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
  font-size: 28px;
  font-weight:600;
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
     <br>
 		 <br>
     <center>
     <h4>Rincian Bang Ojek yang tersedia</h4>
           </div>
           <div id='bottom_div'>
          <center>
 <?php
     $pemesan = $_POST['pemesan'];
     $ponsel = $_POST['ponsel'];
     $asal = $_POST['asal'];
     $lat = $_POST['lat'];
     $lng = $_POST['lng'];
     $tujuan = $_POST['tujuan'];
     $lat_tujuan = $_POST['lat_tujuan'];
     $long_tujuan = $_POST['long_tujuan'];
     $jarak = $_POST['jarak'];

     $mysqli = new mysqli("localhost", "root", "", "mad");
     $query = "SELECT * FROM kendaraan WHERE mangkal LIKE '%$asal%' ORDER BY RAND() limit 1";
     $result = $mysqli->query($query);
     if($result->num_rows > 0)
      {
     while($row = $result->fetch_array(MYSQLI_BOTH)) {
         echo "<br>";

         echo "<h7>$row[nama]</h7>";
         echo "<br>";
         echo "<br>";
         echo "<h5>$row[nopol]</h5>";
         echo "<h6>$row[motor]</h6>";
         echo "<p>";
         echo "<h6>Tarif per kilometer yang dikenakan ialah Rp$row[tarif].</h6>";
         echo "<br>";

         echo "<form method='post' name='aktif' action='proses-aktif.php'>";
         echo "<input type='hidden' name='pemesan' value='$pemesan'>";
         echo "<input type='hidden' name='ponsel' value='$ponsel'>";
         echo "<input type='hidden' name='asal' value='$asal'>";
         echo "<input type='hidden' name='lat' value='$lat'>";
         echo "<input type='hidden' name='lng' value='$lng'>";
         echo "<input type='hidden' name='tujuan' value='$tujuan'>";
         echo "<input type='hidden' name='lat_tujuan' value='$lat_tujuan'>";
         echo "<input type='hidden' name='lng_tujuan' value='$long_tujuan'>";
         echo "<input type='hidden' name='pengemudi' value='$row[nama]'>";
         echo "<input type='hidden' name='ponsel_pengemudi' value='$row[ponsel]'>";
         echo "<input type='hidden' name='motor' value='$row[motor]'>";
         echo "<input type='hidden' name='nopol' value='$row[nopol]'>";
         echo "<input type='hidden' name='tarif' value='$row[tarif]'>";
         echo "<input type='hidden' name='jarak' value='$jarak'>";
         echo "<input type='submit' value='Pesan' alt='submit'>";


     }
   } else {
       header("location:refresh-penumpang.php");
   }
 ?>

</div>
</div>

</body>
</html>
