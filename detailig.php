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
<div class="wrapper bgded overlay" style="background-image:url('assets/img/IG.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Instagram</h6>
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-image:url('assets/img/hero-bg.jpg');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Sejarah Instagram</h1>
      <img class="imgr borderedbox inspace-5" src="assets/img/ig100.png" alt="">
      <p><strong>Instagram</strong> adalah sebuah aplikasi berbagi foto yang memungkinkan pengguna mengambil foto, menerapkan filter digital, dan membagikannya ke berbagai layanan jejaring sosial, termasuk milik Instagram sendiri.</p>
      <p>Satu fitur yang unik di Instagram adalah memotong foto menjadi bentuk persegi, sehingga terlihat seperti hasil kamera Kodak Instamatic dan Polaroid. Hal ini berbeda dengan rasio aspek 4:3 yang umum digunakan oleh kamera pada peralatan bergerak.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/ig100_2.jpg" alt="">
      <p>Instagram dapat digunakan di iPhone, iPad atau iPod Touch versi apapun dengan sistem operasi iOS 3.1.2 atau yang terbaru dan telepon kamera Android apapun dengan sistem operasi 2.2 (Froyo) atau yang terbaru. Aplikasi ini tersebar melalui Apple App Store dan Google Play.</p>
      <p>Pada tanggal 9 April 2012, diumumkan bahwa Facebook setuju mengambil alih Instagram dengan nilai sekitar $1 miliar.</p>
      <p>Berdiri pada tahun 2010 perusahaan Burbn, Inc., merupakan sebuah teknologi startup yang hanya berfokus kepada pengembangan aplikasi untuk telepon genggam. Pada awalnya Burbn, Inc. sendiri memiliki fokus yang terlalu banyak di dalam HTML5 mobile, namun kedua CEO, <strong>Kevin Systrom</strong> dan juga <strong>Mike Krieger</strong>, memutuskan untuk lebih fokus pada satu hal saja.</p>
      <p><img src="assets/img/ksmk.jpg" style="padding-left: 30%"></p>
      <p>Setelah satu minggu mereka mencoba untuk membuat sebuah ide yang bagus, pada akhirnya mereka membuat sebuah versi pertama dari Burbn, namun di dalamnya masih ada beberapa hal yang belum sempurna.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/igdark.jpg" alt="">
      <p>Versi Burbn yang sudah final, adalah aplikasi yang sudah dapat digunakan di dalam iPhone, yang dimana isinya terlalu banyak dengan fitur-fitur.</p>
      <p>Sulit bagi <strong>Kevin Systrom</strong> dan <strong>Mike Krieger</strong> untuk mengurangi fitur-fitur yang ada, dan memulai lagi dari awal, namun akhirnya mereka hanya memfokuskan pada bagian foto, komentar, dan juga kemampuan untuk menyukai sebuah foto. Itulah yang akhirnya menjadi Instagram.</p>
      <p>Nama instagram berasal dari pengertian dari keseluruhan fungsi aplikasi ini. Kata “insta” berasal dari kata “instan”, seperti kamera polaroid yang pada masanya lebih dikenal dengan sebutan “foto instan”.</p>
      <p>Instagram juga dapat menampilkan foto-foto secara instan, seperti polaroid di dalam tampilannya. Sedangkan untuk kata “gram” berasal dari kata “telegram”, dimana cara kerja telegram sendiri adalah untuk mengirimkan informasi kepada orang lain dengan cepat. Sama halnya dengan Instagram yang dapat mengunggah foto dengan menggunakan jaringan internet, sehingga informasi yang ingin disampaikan dapat diterima dengan cepat. Oleh karena itulah Instagram berasal dari instan-telegram.</p>
      <img class="imgl borderedbox inspace-5" src="assets/img/igjadul.png" alt="">
      <p>Sistem sosial di dalam Instagram adalah dengan menjadi mengikuti akun pengguna lainnya, atau memiliki pengikut Instagram. Dengan demikian komunikasi antara sesama pengguna Instagram sendiri dapat terjalin dengan memberikan tanda suka dan juga mengomentari foto-foto yang telah diunggah oleh pengguna lainnya.</p>
      <p>Pengikut juga menjadi salah satu unsur yang penting, dimana jumlah tanda suka dari para pengikut sangat mempengaruhi apakah foto tersebut dapat menjadi sebuah foto yang populer atau tidak. Untuk menemukan teman-teman yang ada di dalam Instagram. Juga dapat menggunakan teman-teman mereka yang juga menggunakan Instagram melalui jejaring sosial seperti Twitter dan juga <strong>Facebook</strong>.</p>
      <p><strong>Kegunaan Utama Instagram</strong> adalah sebagai tempat untuk mengunggah dan berbagi foto-foto kepada pengguna lainnya. Foto yang hendak ingin diunggah dapat diperoleh melalui kamera iDevice ataupun foto-foto yang ada di album foto di iDevice tersebut.</p>
      <p>Foto yang telah diambil melalui aplikasi Instagram dapat disimpan di dalam iDevice tersebut. Penggunaan kamera melalui Instagram juga dapat langsung menggunakan efek-efek yang ada, untuk mengatur pewarnaan dari foto yang dikehendaki oleh sang pengguna.</p>
      <img class="imgr borderedbox inspace-5" src="assets/img/loveig.png" alt="">
      <p>Ada juga efek kamera tilt-shift yang fungsinya adalah untuk memfokuskan sebuah foto pada satu titik tertentu. Setelah foto diambil melalui kamera di dalam Instagram, foto tersebut pun juga dapat diputar arahnya sesuai dengan keinginan para pengguna.</p>
      <p>Foto-foto yang akan diunggah melalui Instagram tidak terbatas atas jumlah tertentu, melainkan Instagram memiliki keterbatasan ukuran untuk foto. Ukuran yang digunakan di dalam Instagram adalah dengan rasio 3:2 atau hanya sebatas berbentuk kotak saja.</p>
      <p>Para pengguna hanya dapat mengunggah foto dengan format itu saja, atau harus menyunting foto tersebut dulu untuk menyesuaikan format yang ada. Setelah para pengguna memilih sebuah foto untuk diunggah di dalam Instagram, maka pengguna akan dibawa ke halaman selanjutnya untuk menyunting foto tersebut.</p>
      <p><img src="assets/img/pageig.jpg"></p>
      <p>Pada versi awalnya, Instagram memiliki 15 efek-efek yang dapat digunakan oleh para pengguna pada saat mereka hendak menyunting sebuah foto. Efek tersebut terdiri dari: X-Pro II, Lomo-fi, Earlybird, Sutro, Toaster, Brannan, Inkwell, Walden, Hefe, Apollo, Poprockeet, Nashville, Gotham, 1977, dan Lord Kelvin. Namun tepat pada tanggal 20 September yang lalu Instagam telah menambahkan 4 buah efek terbaru yaitu; Valencia, Amaro, Rise, Hudson dan telah menghapus 3 efek, Apollo, Poprockeet, dan Gotham dari dalam fitur tersebut.</p>
      <p>Di dalam pengaplikasian efek sekalipun para pengguna juga dapat menghilangkan bingkai-bingkai foto yang sudah termasuk di dalam efek tersebut. Fitur lainnya yang ada pada bagian penyuntingan adalah Tilt-Shift. Tilt-shift ini, sama fungsinya dengan efek kamera melalui instagram, yaitu untuk memfokuskan satu titik pada sebuah foto, dan sekelilingnya menjadi buram. Dalam penggunaannya aplikasi Tilt-Shift memiliki 2 bentuk, yaitu persegi panjang dan juga bulat.</p>
      <p>Kedua bentuk tersebut dapat diatur besar dan kecilnya, juga titik fokus yang diinginkan. Tilt-shift juga mengatur rupa foto disekeliling titik fokus tersebut, sehingga para pengguna dapat mengatur tingkat buram pada sekeliling titik fokus di dalam foto tersebut.</p>
      <p><img src="assets/img/wowig.png"></p>
      <p>Setelah foto tersebut disunting, maka foto akan dibawa ke halaman selanjutnya, dimana foto tersebut akan diunggah ke dalam Instagram sendiri ataupun ke jejaringan sosial lainnya. Dimana di dalamnya tidak hanya ada pilihan untuk mengunggah pada jejaringan sosial atau tidak, tetapi juga untuk memasukkan judul foto, dan menambahkan lokasi foto tersebut.</p>
      <p>Sebelum mengunggah sebuah foto, para pengguna dapat memasukkan judul untuk menamai foto tersebut sesuai dengan apa yang ada dipikiran para pengguna. Judul-judul tersebut, para pengguna dapat menyinggung pengguna Instagram lainnya dengan mencantumkan akun dari orang tersebut. Para pengguna juga dapat memberikan label pada judul foto tersebut, sebagai tanda untuk mengelompokkan foto tersebut di dalam sebuah kategori.</p>
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