<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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

<div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br /><br />
                <h2 style="color: white;"> Register</h2>

                <h5 style="color: white;">( Regist Dulu Kawan )</h5>
                <br />
            </div>
            
        </div>

<div class="container" style="color: white">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Register User</h3>
					</div>
				
				<div class="panel-body">
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-3">Nama</label>
							<div class="col-md-7">
							<input type="text" name="nama" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Email</label>
							<div class="col-md-7">
							<input type="email" name="email" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-7">
							<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Alamat</label>
							<div class="col-md-7">
							<textarea class="form-control" name="alamat" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">No.Telepon/HP</label>
							<div class="col-md-7">
							<input type="text" name="telepon" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-5">
								<button class="btn btn-primary" name="daftar"><img src="assets/img/paper-plane.png" width="18"> Register</button>
								<footer style="padding-top: 50%">@Copyright by 18111014_Andika Glin Putra_TIFRP18CNSA_UASWEB1</footer>
							</div>
						</div>
					</form>

					<?php 
					if (isset($_POST["daftar"])) 
					{
						$nama = $_POST["nama"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$alamat = $_POST["alamat"];
						$telepon = $_POST["telepon"];

						$ambil = $koneksi -> query("SELECT*FROM user WHERE email_user='$email'");
						$yangcocok = $ambil -> num_rows;

						if ($yangcocok==1) 
						{
							echo "<script>alert('Registration Failed, Email Already in Use');</script>";
							echo "<script>location = 'daftar.php';</script>";
						}
						else
						{
							$koneksi -> query("INSERT INTO user (email_user,pass_user,nama_user,telp_user,alamat_user)VALUES('$email','$password','$nama','$telepon','$alamat')");

							echo "<script>alert('Registration Success, Please Login');</script>";
							echo "<script>location = 'login.php';</script>";
						}
					}


					 ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>