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

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <div class="scrollable">
      </div>
        <h2>Profile</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label>Name</label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label>Password</label>
            <input type="text" name="name" id="pass" value="" size="22" required>
          </div>
          <div class="one_third">
            <label>No.Telepon</label>
            <input type="text" name="name" id="telp" value="" size="22" required>
          </div>
          <div class="block clear">
            <label>Alamat</label>
            <textarea name="comment" id="alamat" cols="25" rows="10"></textarea>
          </div>
          &nbsp;
          <div>
            <input type="submit" name="Edit" value="submit">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>