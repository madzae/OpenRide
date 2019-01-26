<?php
session_start();
  if (!isset($_SESSION["ponsel"]))
   {
      header("location: daftar.php");
   }
?>
<!doctype html>
<html>
<head>
	<title>Mios</title>
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
		h1 {
	    font-family:proxima-nova, Arial !important;
	    font-style: normal;
	    font-size: 12px;
	    font-weight:100;
	    letter-spacing: 1.5px;
	    color: #ffff;
	    line-height: 1.5em;
			margin: 10px 23px;
			}
		h2 {
		  font-family:proxima-nova, Arial !important;
		  font-style: normal;
		  font-size: 12px;
		  font-weight:100;
		  letter-spacing: 1.5px;
		  color: #4151BA;
		  line-height: 1.5em;
		  margin: 10px 23px;
		  }
		h4 {
		  font-family:proxima-nova, Arial !important;
		  font-style: normal;
		  font-size: 36px;
		  font-weight:700;
		  letter-spacing: 3px;
	    color: #ffff;
			line-height: 1em;
	  	margin: 10px 23px;
			}

		.button {
			background-color: #fffcfc;
		  border: none;
		 	color: #4151BA;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 28px;
			font-weight:200;
			margin: 10px 5px;
			cursor: pointer;
			line-height: 1.5em;
			}
		.button2 {
		  background-color: #4151BA;
			border: none;
			color: #fffcfc;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 28px;
			font-weight:200;
			margin: 10px 5px;
			cursor: pointer;
			line-height: 1.5em;
			}

	</style>
</head>

<body>
<div id="container">
 <div id="top_div">
			<br>
			<br>
			<br>
				<center>
					<h4>OpenRide</h4>
		  	</center>
			<br>
			<br>
			<br>
			<div id="center">
				<a href="map.php"><button class="button">Jadi penumpang!</button></a>
			</div>
				<center>
					<h1>Pakai smartphonemu, cari abang ojek yang siap nganter ke manapun.</h1>
				</center>
	</div>
	<div id="bottom_div">
			<br>
			<br>
 		 <div id="center">
 		 		<a href="map-driver.php"><button class="button button2">Jadi pengemudi!</button></a>
				<center>
					<h2>Gunakan motor dan waktu luangmu sebagai sumber penghasilan tambahan.</h2>
				</center>
	</div>
</div>
</body>
</html>
