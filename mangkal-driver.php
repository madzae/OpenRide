<?php
session_start();
?>
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
h1 {
  color: #ffffff;
  font-family: 'Raleway',sans-serif;
  font-size: 23px;
  font-weight: 500;
  line-height: 36px;
  margin: 15px 0px 5px 15px;
  line-height: 1.1em;
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
h3 {
  font-family:proxima-nova, Arial !important;
  font-style: normal;
  font-size: 24px;
  font-weight:400;
  letter-spacing: 3px;
  color: #ffff;
  line-height: 1.5em;
  margin: 10px 5px;
  }
p {
  color: #f8f8f8;
  font-family: 'Raleway',sans-serif;
  font-size: 18px;
  font-weight: 500;
  line-height: 1em;
  margin: 15px 70px 15px 15px;
  }
  input[type=text] {
    border: none;
    border-bottom: 1px solid #4151BA;
    width: 60%;
    padding: 15px 22px;
    margin: 10px 5px;
    }
  input[type=button], input[type=reset], input[type=submit] {
    background-color: #4151BA;
    border: none;
    color: white;
    padding: 14px 18px;
    text-decoration: none;
    margin: 5px 4px;
    cursor: pointer;
    }
  input[type=submit]:hover {
    background-color: #4589f7;
    }

  input[type=button], input[type=reset], input[type=submit] {
    background-color: #ffffff;
    border: none;
    color: #4151BA;
    padding: 14px 18px;
    text-decoration: none;
    margin: 5px 4px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
    }
  input[type=submit]:hover {
        background-color: #f7f9fc;
    }

</style>
</head>

<body>
  <div id="container">
    <div id="top_div">
      <center>
      <br>
      <h1><?php echo $_SESSION['nama']; ?></h1>
      <br>
<?php
$id = rand();
$to = str_replace(" ","+",$_POST['location']);
$nama = $_SESSION['nama'];
$ponsel = $_SESSION['ponsel'];

$jsonurl = "http://photon.komoot.de/api/?q=$to&limit=1";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json, true);
echo "<h3>";
echo $json_output['features'][0]['properties']['name'];
echo "</h3>";
echo "<br>";
echo "<form method='post' name='pesanan' action='proses-driver.php'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='hidden' name='mangkal' value='".$json_output['features'][0]['properties']['name']; "'";  echo "'"; echo ">";
echo "<input type='hidden' name='lat' value='".$json_output['features'][0]['geometry']['coordinates'][0]; "'";  echo "'"; echo ">";
echo "<input type='hidden' name='lng' value='".$json_output['features'][0]['geometry']['coordinates'][1]; "'";  echo "'"; echo ">";
echo "<input type='hidden' id='nama' name='nama' value='$nama'>";
echo "<input type='hidden' id='ponsel' name='ponsel' value='$ponsel' >";
echo "<input type='text' id='motor' name='motor' placeholder='Tipe motor Anda (Misal: Honda Vario)' required oninvalid='this.setCustomValidity('Tipe motor Anda')'
 oninput='this.setCustomValidity('')''>";
echo "<input type='text' id='nopol' name='nopol' placeholder='Nomor polisi motor Anda' required oninvalid='this.setCustomValidity('Nopol motor Anda')'
 oninput='this.setCustomValidity('')''>";
echo "<input type='text' id='tarif' name='tarif' placeholder='Berapa tarif per kilometer yang Anda inginkan? (Misal: 2500)' required oninvalid='this.setCustomValidity('Tarif keinginan Anda')'
  oninput='this.setCustomValidity('')''>";
echo "<br>";
echo "<input type='submit' value='Proses' alt='submit'>";
?>
    </center>
</div>
<div id="bottom_div">
</div>

</body>
</html>
