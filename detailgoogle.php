<?php 

session_start();
include 'koneksi.php';

if (!isset($_SESSION["user"])) {
  echo "<script>alert('Please Login');</script>";
  echo "<script>location='login.php';</script>";
}

?>


<!DOCTYPE html>
<!--
Template Name: Trealop
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Story Company</title>
<meta charset="utf-8">
<link href="assets/img/info.jpg" rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +62 817 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> StoCom@gmail.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="utama.php"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="utama.php">Story Company</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a class="fas fa-home" href="utama.php"> Home</a></li>
        <?php if (isset($_SESSION["user"])): ?>
          <li><a href="logout.php"></a></li>
        <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="daftar.php">Register</a></li>
        <?php endif ?>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('assets/img/google1000.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Google</h6>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-image:url('assets/img/hero-bg.jpg');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Sejarah Google</h1>
      <img class="imgr borderedbox inspace-5" src="assets/img/google100.png" alt="">
      <p>Nama Google lahir karena "<strong>Kecelakaan</strong>". Sejarah Google dimulai dari proyek yang dikerjakan oleh Larry Page dan Sergey Brin pada 1996. Saat itu, kedua mahasiswa pascasarjana di Stanford University itu berkolaborasi mengembangkan mesin pencari bernama BackRub, yang dioperasikan menggunakan server di kampus mereka.</p>
      <p>Pada 1997, Larry dan Sergey mengganti nama BackRub menjadi Googol. "<strong>Googol</strong>" merupakan istilah matematika untuk angka 1 yang diikuti oleh 100 angka nol. Nama ini diambil untuk menjelaskan misi Google sebagai gudang informasi tak terbatas di internet.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/google100_2.png" alt="">
      <p>Akan tetapi, para investor rupanya salah mengeja nama Googol menjadi Google, dan telanjur menuliskannya dalam cek. Hal itu membuat Brin dan Page akhirnya "mentok" menggunakan nama Google untuk mesin pencari mereka.</p>
      <p>Google merupakan salah satu perusahaan digital yang gencar mengakuisisi startup yang berpotensi. Di antaranya, YouTube, Android, Motorola Mobility, Pyra Labs yang mengembangkan Blogger, serta Keyhole Inc yang melahirkan layanan Google Maps dan Google Earth.</p>
      <p>Hingga kini, sudah ada ratusan startup (perusahaan rintisan) yang diakuisisi oleh Google. Sejak 2010, jika dirata-rata, maka Google telah mengakuisisi lebih dari satu perusahaan setiap minggu.</p>
      <p>Halaman muka Google tampil bersih sejak kali pertama beroperasi karena dulu kedua pendirinya tidak menguasai HTML. Page dan Brin juga menginginkan mesin pencari dengan antarmuka yang ringkas. Karena itu, pencarian melalui Google dibuat sederhana. Pengguna cukup menekan tombol Enter setelah memasukkan kata kunci pencariannya.</p>
      <p><img src="assets/img/pendirigoogle.jpg" style="padding-left: 20%"></p>
      <p>Hingga kini, tampilan homepage Google yang bersih, hanya menampilkan logo dan kotak pencarian, tetap dipertahankan.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/googledark.png" alt="">
      <p>Masih ada fakta-fakta menarik lainnya. Indeks pencarian Google memiliki ukuran raksasa, yakni lebih dari 100 juta gigabyte. Dengan kata lain, butuh lebih dari 100.000 hard disk personal berukuran 1 terabyte untuk menyimpan indeks pencarian itu.</p>
      <p>Untuk menampilkan informasi pada aplikasi Street View yang merupakan bagian dari Google Maps, jika ditotal, maka Google telah memotret jalan sepanjang 5 juta mil atau 8,046 juta km.</p>
      <p>Pada tahun 2012, Google telah menemukan lebih dari 30 triliun URL unik di web. Coba bandingkan dengan jumlah URL unik pada tahun 2008, yang hanya berjumlah 1 triliun!.</p>
          
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Tentang</h6>
      <p>Story Company adalah situs yang berisi tentang kumpulan cerita dari berbagai perusahaan.</p>
      
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Mauris lorem curabitur</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Semper lacus id nibh etiam iaculis viverra pede proin laoreet dolor ut nunc&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Donec turpis aliquam sapien est sodales id elementum at molestie in felis class&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Eget mauris egestas</h6>
      <ul class="nospace linklist">
        <li><a href="#">Aptent taciti sociosqu ad</a></li>
        <li><a href="#">Litora torquent per conubia</a></li>
        <li><a href="#">Nostra per inceptos himenaeos</a></li>
        <li><a href="#">Nam semper ipsum et purus</a></li>
        <li><a href="#">Suspendisse sed quam aliquam</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat quisque mauris</h6>
      <p class="nospace btmspace-15">Viverra etiam dictum euismod lectus vestibulum tincidunt erat vel molestie.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">@Copyright by 18111014_Andika Glin Putra_TIF RP 18 CNS A_UASWEB1</p>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>