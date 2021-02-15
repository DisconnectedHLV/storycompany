<?php 
session_start();

// mengahancurkan $_SESSION["pelanggan"]
session_destroy();
echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='utama.php';</script>";

 ?>