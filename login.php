<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/info.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v2.1.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


<style type="text/css">
	#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  filter: brightness(35%);
}
</style>
<body>
	<video autoplay muted loop playsinline id="myVideo" style="background-color: #0b0340">
  <source src="assets/img/background.webm" type="video/webm">
</video>
</body>


		
	
		<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="daftar.php" style="color: white;"><img src="assets/img/daftar.png" width="50"><br><strong>Register</strong></a></li>
</ul>
<div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br /><br />
                <h2 style="color: white;"> Login Kuy</h2>

                
                <br />
            </div>
            
        </div>

<div class="container" style="color: white">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login User</h3>
				</div>
				<div class="panel-body" style="color: white">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button class="btn btn-primary" name="login"><img src="assets/img/paper-plane.png" width="18"> Login</button>
						<footer style="padding-top: 50%">@Copyright by 18111014_Andika Glin Putra_TIFRP18CNSA_UASWEB1</footer>
					</form>
				</div>
			</div>
			</div>
		</div>
		
	</div>
	
</div>

<?php
if (isset($_POST["login"])) {

	$email = $_POST["email"];
	$password = $_POST["password"];
	$ambil = $koneksi -> query ("SELECT * FROM user WHERE email_user = '$email' AND pass_user ='$password'");

	$akunyangcocok = $ambil -> num_rows;

	if ($akunyangcocok==1) {
		//anda sudah login
		// mendapatkan akun dalam bentuk array
		$akun = $ambil -> fetch_assoc();
		$_SESSION["user"] = $akun;
		echo "<script>alert('Anda Sukses Login');</script>";
		echo "<script>location = 'utama.php';</script>";
	}
	else{
		// anda gagal login
		echo "<script>alert('anda gagal login, periksa akun anda');</script>";
		echo "<script>location = 'login.php';</script>";
	}
}
?>

