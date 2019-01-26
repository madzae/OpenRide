<html>
<head>
	<title>Mad</title>
	<style>
	input[type=text] {
	 border: none;
	 border-bottom: 2px solid black;
	 width: 50%;
	 padding: 15px 22px;
	 margin: 10px 5px;
	-webkit-transition: width 0.5s ease-in-out;
	transition: width 0.5s ease-in-out;
	}
	input[type=password] {
	 border: none;
	 border-bottom: 2px solid black;
	 width: 50%;
	 padding: 15px 22px;
	 margin: 10px 5px;
	-webkit-transition: width 0.5s ease-in-out;
	transition: width 0.5s ease-in-out;
	}
	input[type=button], input[type=reset], input[type=submit] {
	    background-color: grey;
	    border: none;
	    color: white;
	    padding: 18px 36px;
	    text-decoration: none;
	    margin: 5px 4px;
	    cursor: pointer;
	}
	input[type=submit]:hover {
	    background-color: #45a049;
	}
	</style>
</head>
<body>

<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
?>

	<form method="post" action="cek-login-driver.php">
	<input name="nama" type="text" placeholder="Masukkan nama" required oninvalid="this.setCustomValidity('Isi username')"
	oninput="this.setCustomValidity('')">
		</p>
	<input name="password" type="password" placeholder="Masukkan password" required oninvalid="this.setCustomValidity('Isi password')"
	oninput="this.setCustomValidity('')">
	</p>
	<input type="submit" value="Login" alt="submit">
	</form>


</body>
</html>
