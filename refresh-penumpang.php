<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="10; URL=map.php">
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
  bottom: 0%;
  background-color:#4151BA;
  }
#bottom_div {
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  bottom: 0;
  background-color:#ffff;
  }
#center {
  text-align: center;
    }
h2 {
  color: #ffffff;
  font-family: 'Raleway',sans-serif;
  font-size: 30px;
  font-weight: 800;
  line-height: 36px;
  margin: 15px 0px 5px 15px;
  line-height: 1.1em;
  }
p {
  color: #f8f8f8;
  font-family: 'Raleway',sans-serif;
  font-size: 18px;
  font-weight: 500;
  line-height: 1em;
  margin: 15px 0px 5px 15px;
  }
input[type=button], input[type=reset], input[type=submit] {
      background-color: #ffffff;
      border: none;
      color: #4151BA;
      padding: 18px 36px;
      text-decoration: none;
      margin: 5px 4px;
      font-size: 22px;
      font-weight: 500;
      cursor: pointer;
  }
input[type=submit]:hover {
      background-color: #f7f9fc;
  }
</style>
<script>
var timeleft = 10;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 10 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);
},1000);
</script>
</head>

<body>
  <div id="container">
    <div id="top_div">
      <center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p>Hai,</p>
      <h2><?php echo $_SESSION['nama']; ?></h2>
      <br>
      <br>
      <p>Maaf. Nampaknya tidak ada mitra pengemudi kami di sekitar lokasi Anda</p>
      <br>
      <p>Ulangi pemesanan.</p>
      <p>(Sistem secara otomatis akan mengarahkan Anda untuk memesan ulang)</p>
      <progress value="0" max="10" id="progressBar"></progress>
     </center>
</div>
<div id="bottom_div">
</div>

</body>
</html>
