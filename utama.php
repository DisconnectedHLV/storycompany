<?php
session_start();
//koneksi ke database
include 'koneksi.php';
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
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +62 817 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> StoCom@gmail.com</li>
      </ul>
    </div>
      <!-- ################################################################################################ -->
    <div class="fl_right"> 
      <ul class="nospace">
        <li><a href="utama.php"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
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
<!-- Header -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1><a href="utama.php">Story Company</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li><a class="fas fa-home" href="utama.php"> Home</a></li>
        <?php if (isset($_SESSION["user"])): ?>
          <li><a class = "drop"> Profile</a>
          <ul>
          <li><a class="fas fa-address-card" href="profile.php"> My Profile</a></li>
          <li><a class="fas fa-sign-out-alt" href="logout.php"> Logout</a></li>
          </ul> 
          </li>
        <?php else: ?>
        <li><a class="fas fa-sign-in-alt" href="login.php"> Login</a></li>
        <li><a class="fas fa-edit" href="daftar.php"> Register</a></li>
        <?php endif ?>
      </ul>
    </nav>
  </header>
</div>
<!-- Utama -->
<div class="wrapper bgded overlay" style="background-image:url('assets/img/city.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Various Company Stories</h3>
    </article>
  </div>
</div>
<!-- Reading -->
<div class="wrapper row2" style="background-image: url('assets/img/hero-bg.jpg');">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading"><strong>Happy Reading The Story</strong></h6>
    </div>
    <ul class="nospace group prices">
      <li class="one_third">
        <article><li><img src="assets/img/googlee.jpg"></li>
          <h6 class="heading">Google</h6>
          <p>Nama Google lahir karena "kecelakaan"</p>
          <footer><a class="btn" href="detailgoogle.php">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><li><img src="assets/img/facebook.jpg"></li>
          <h6 class="heading">Facebook</h6>
          <p>Sejarah Mark Zuckerberg Mendirikan Facebook</p>
          <footer><a class="btn" href="detailfb.php">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><li><img src="assets/img/insta.jpg"></li>
          <h6 class="heading">Instagram</h6>
          <p>Sejarah Asal Mula Media Sosial Instagram</p>
          <footer><a class="btn" href="detailig.php">Read More</a></footer>
        </article>
      </li>
    </ul>
  </section>
</div>
<!-- ######################################################################################## -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">Tentang</h6>
      <p>Story Company adalah situs yang berisi tentang kumpulan cerita dari berbagai perusahaan.</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-instagram"></i></a></li>
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
  </footer>
</div>
<!-- Copyright -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">@Copyright by 18111014_Andika Glin Putra_TIF RP 18 CNS A_UASWEB1</p>
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>