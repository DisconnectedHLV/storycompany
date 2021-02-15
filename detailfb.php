<?php 

session_start();
include 'koneksi.php';

if (!isset($_SESSION["user"])) {
  echo "<script>alert('Please Login');</script>";
  echo "<script>location='login.php';</script>";
}

?>


<!DOCTYPE html>

<html lang="">

<head>
<title>Story Company</title>
<meta charset="utf-8">
<link href="assets/img/info.jpg" rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 

      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +62 817 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> StoCom@gmail.com</li>
      </ul>

    </div>
    <div class="fl_right"> 

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

<div class="wrapper bgded overlay" style="background-image:url('assets/img/face.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Facebook</h6>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-image:url('assets/img/hero-bg.jpg');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1><strong>Sejarah Facebook</strong></h1>
      <img class="imgr borderedbox inspace-5" src="assets/img/fb100.png" alt="">
      <p><strong>Facebook</strong>, Inc adalah sosial media online asal Amerika dan juga perusahaan jejaring sosial berbasis di Menlo, California, AS. Facebook adalah suatu layanan jejaring sosial yang awalnya diluncurkan sebagai Face Mash pada bulan Juli tahun 2003, dan kemudian diganti nama menjadi Facebook pada 4 Februari 2004.</p>
      <p>Sejarah Berdirinya Facebook didirikan oleh <strong>Mark Zuckerberg</strong> dan teman – teman di asrama kuliahnya di Universitas Harvard yaitu Eduardo Saverin, Andrew Mc Collum, Dustin Moskowitz dan Chris Hughes.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/fblike.png" alt="">
      <p>Saat ini Facebook dianggap sebagai salah satu dari Empat Besar perusahaan teknologi selain Amazon, Apple dan Google.</p>
      <p>Keanggotaan dalam website tersebut awalnya dibatasi hanya untuk para mahasiswa Harvard, tetapi kemudian meluas ke kampus yang termasuk kedalam Ivy League di Boston, dan lama kelamaan berkembang kepada kebanyakan universitas di Amerika Serikat dan Kanada, perusahaan, dan pada September 2006 mencakup semua orang yang memiliki alamat email sah dengan persyaratan usia minimum 13 tahun keatas.</p>
      <p><strong>Masa Kecil Mark Zuckerberg</strong></p>
      <p>Sejarah Berdirinya Facebook tidak dapat dilepaskan dari masa kecil pendirinya yaitu Mark Zuckeberg yang telah menunjukkan bakat programming komputer sejak kecil. Ayahnya yang memahami pentingnya coding, telah mengajarkan Zuckerberg program dasar programmer komputer ATARI.</p>
      <p>Ketika usia 11 tahun orang tuanya menyewa pengembang software bernama David Newman untuk mengajarinya. Dalam beberapa tahun, ia dapat menciptakan program praktis bernama ZuckNet yang bekerja seperti pesan singkat internal.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/fbdark.png" alt="">
      <p>Ketika sedang belajar di Phillips Exeter Academy ia menciptakan Synapse, bagian dari software yang mempelajari selera musik penggunanya melalui kecerdasan buatan dan kebiasaan mendengar musik sehingga membuat AOL dan Microsoft menawarinya posisi di perusahaan mereka.</p>
      <p>Tetapi Zuckerberg menolaknya dan memilih meneruskan sekolah di Harvard. Ketahui juga mengenai sejarah berdirinya aqua, sejarah google, dan sejarah berdirinya Apple.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/fb.png" alt="">
      <p><strong>Perkembangan Face Mash</strong></p>
      <p>Sejarah facebook berawal dari sejarah Face Mash sebagai pendahulunya yang dibuka pada tahun 2003. Dikembangkan oleh Mark Zuckerberg yang merancang software untuk website Facemash ketika berada di tahun kedua universitas. Website tersebut dirancang sebagai tipe game untuk para mahasiswa Harvard yang memungkinkan para pengunjung membandingkan dua mahasiswa wanita dengan gambar bersisian dan pengunjung akan memutuskan siapa diantara mereka yang lebih ‘hot’ atau menarik.</p>
      <p>Face Mash menggunakan foto yang dikompilasi dari ‘face book’ sembilan asrama di Harvard, menempatkannya bersisian dalam satu waktu dan meminta pengguna untuk memilih siapa yang lebih menarik. Metode itu dapat menarik pengunjung sebanyak 450 orang dan 22.000 views pada foto yang dipajang dalam empat jam pertama online.</p>
      <p>Situs tersebut dengan cepat dibagikan kepada beberapa grup server kampus, tetapi beberapa hari kemudian dinon aktifkan oleh administrator Harvard. Karena ia tidak secara resmi mendapatkan izin maka tidak aneh banyak pihak yang merasa dirugikan.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/fb2.png" alt="">
      <p>‘<strong>Face book</strong>’ adalah direktori siswa yang memuat foto dan informasi dasar. Pada masa itu tidak ada database siswa yang online melainkan hanya berupa berkas cetak dan direktori online pribadi. Zuckerberg menghadapi ancaman pengusiran dan dituduh dengan penerobosan keamanan, pelanggaran hak cipta dan melanggar privasi individu.</p>
      <p>Tuduhan tersebut pada akhirnya dibatalkan oleh Dewan Administrasi Harvard dan Zuckerberg menghabiskan proyek utamanya di semester tersebut dengan menciptakan alat studi sosial sebelum ujian akhir sejarah seni.</p>
      <p>Ia mengupload semua gambar seni ke satu website yang masing – masing mencantumkan bagian komentar korespondensi, lalu membagi situsnya dengan teman – teman sekelasnya, dan orang – orang kemudian mulai saling berbagi catatan.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/fbdislike.jpg" alt="">
      <p><strong>Peluncuran TheFacebook</strong></p>
      <p>Sejarah Berdirinya Facebook Pada bulan Januari 2004,  Zuckerberg mulai mengkode dan meluncurkan Thefacebook pada Februari 2004. Dengan nama yang sedikit berbeda, program itu lumayan familiar.</p>
      <p>Program itu memiliki profil dimana pengguna bisa mengupload foto, berbagi minat, dan terhubung dengan orang lain, juga menawarkan visualisasi jaringan dari hubungan pengguna. Dalam bulan pertama sekitar 50 persen mahasiswa telah bergabung, tetapi kemudian Zuckerberg menghadapi masalah lain: ia dituntut secara hukum.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/fbicon.png" alt="">
      <p>Pada bulan Juni 2004 operasional perusahaan dipindahkan ke Palo Alto, California dan mengamankan beberapa investasi penting. Rekan pendiri PayPal, Peter Thiel kemudian bergabung dengan dewan perusahaan dan membawa dana 500 ribu dolar. Pada bulan Mei 2005 Thefacebook menerima lebih banyak dana.</p>
      <p>Kali ini investasi sebesar 12,7 juta dolar dari Accel dan 1 juta dolar dari dana pribadi pengusaha kapitalis Jim Breyer. Pada bulan Agustus kata ‘the’ dihilangkan dan perusahaan secara resmi bernama Facebook, dengan biaya domain sebesar 200 ribu dolar. Pada bulan berikutnya siswa sekolah menengah atas diterima bergabung, bersama dengan para karyawan di Microsoft dan Apple sehingga perusahaan siap untuk bergerak dengan student base.</p>
      <p><img src="assets/img/mark.jpg" style="padding-left: 15%"></p>
      <p>Pada tahun 2008 dalam sejarah facebook diluncurkan Facebook Chat yang memungkinkan pengguna untuk lebih terhubung secara instan dengan teman – teman dan keluarga. Konsepnya secara esensial tidak berbeda dari ZuckNet. Disana juga ada fitur Peope You May Know, Facebook Wall, dan Facebook Connect diluncurkan di tahun yang sama. Saat ini Facebook sedang merencanakan untuk menggabungkan Instagram dan WhatsApp bersama agar para pengguna ketiga aplikasi ini bisa berkomunikasi lintas aplikasi.</p>


          
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

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">@Copyright by 18111014_Andika Glin Putra_TIF RP 18 CNS A_UASWEB1</p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>