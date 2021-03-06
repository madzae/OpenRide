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
  font-size: 24px;
  font-weight:400;
  letter-spacing: 3px;
  color: #ffff;
  line-height: 1.5em;
  margin: 10px 5px;
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
a:link, a:visited {
  background-color: #fffcfc;
  color: #323338;
  padding: 14px 25px;
  font-size: 28px;
  font-weight:200;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  line-height: 1.5em;
  margin: 10px 5px;
  }
a:hover, a:active {
  background-color: #bdbdbf;
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
 		 <br>
 		 <br>
		  <center><h3>Hai, <?php echo $_SESSION['nama']; ?></h3></center>
			<center><h4>Pergi ke mana?</h4></center>
    </div>
    <div id="bottom_div">
      <div id="center">
			 <br>
			 <br>
      <form method="post" name="belanja" action="tujuan.php">
				<input id="destination" name="destination" type="text" placeholder="Tentukan tujuan Anda" required oninvalid="this.setCustomValidity('Isi lokasi tujuan')"
				 oninput="this.setCustomValidity('')">
      <input type="submit" value="Tujuan" alt="submit">
		</div>
	 </div>

	</body>
	</html>
