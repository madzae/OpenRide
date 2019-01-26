<?php
error_reporting(0);
?>
<!doctype html>
<html>
<head>
  <script type="text/javascript">
  window.onload = function(){
      var button = document.getElementById('clickButton');
      button.form.submit();
  }
  </script>
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
  margin: 15px 70px 15px 15px;
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
</head>

<body hidden>
  <div id="container">
    <div id="top_div">
      <br>
      <br>
      <h2>Pratinjau</h2>
      <br>
<?php
$id = $_GET['id_pemesanan'];
$mysqli = new mysqli("localhost", "root", "", "mad");
$query = "SELECT * FROM pesanan WHERE id_pemesanan ='". $id."'";
$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
 {
 echo "<p>";
 echo "Dari: $row[asal]</p>";
 echo "<p>";
 echo "Menuju: $row[tujuan]</p>";
 echo "<p>";
 echo "Jarak: ". floor($row[jarak] / 1000). " km";
 echo "<p>";
 echo "Ongkos Perkiraan: Rp ". floor($row[jarak] / 1000)*5000;
 echo "<br>";
 echo "<br>";
 echo "<form method='post' name='cocok' action='cocok.php'>";
 echo "<input type='hidden' name='pemesan' value='$row[pemesan]'>";
 echo "<input type='hidden' name='ponsel' value='$row[ponsel]'>";
 echo "<input type='hidden' name='asal' value='$row[asal]'>";
 echo "<input type='hidden' name='lat' value='$row[lat]'>";
 echo "<input type='hidden' name='lng' value='$row[lng]'>";
 echo "<input type='hidden' name='tujuan' value='$row[tujuan]'>";
 echo "<input type='hidden' name='lat_tujuan' value='$row[lat_tujuan]'>";
 echo "<input type='hidden' name='long_tujuan' value='$row[long_tujuan]'>";
 echo "<input type='hidden' name='jarak' value='$row[jarak]'>";
 echo "<input type='submit' value='Pesan' id='clickButton' alt='submit'>";

		}
?>
</div>
<div id="bottom_div">
</div>

</body>
</html>
