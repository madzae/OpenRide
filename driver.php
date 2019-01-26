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
  padding: 18px 36px;
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
  padding: 18px 23px;
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
      <br>
      <br>
      <h2>Daftar</h2>
      <br>
      <form method="post" name="belanja" action="proses-daftar-driver.php">
				<input id="nama" name="nama" type="text" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('isi nama Anda')"
				 oninput="this.setCustomValidity('')">
        <input id="motor" name="motor" type="text" placeholder="Tipe Motor (Misal: Honda Vario)" required oninvalid="this.setCustomValidity('isi dengan varian motor Anda')"
 				 oninput="this.setCustomValidity('')">
        <input id="nopol" name="nopol" type="text" placeholder="No. Polisi Kendaraan" required oninvalid="this.setCustomValidity('isi dengan nomor polisi motor Anda')"
         oninput="this.setCustomValidity('')">
        <input id="ponsel" name="ponsel" type="text" placeholder="Nomor Ponsel" required oninvalid="this.setCustomValidity('isi dengan nomor ponsel Anda')"
          oninput="this.setCustomValidity('')">
        <br>
      <input type="submit" value="Daftar" alt="submit">
    </div>
    <div id="bottom_div">
    </div>

    </body>
    </html>
