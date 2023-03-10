<?php
session_start();
require_once('baglan.php');

if (!isset($_SESSION['user'])) {
    die('Giriş Yetkiniz Yoktur');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <link rel="icon" href="img/sembol-metal-icon.ico" type="image/x-icon" />

    <!-- CK Editor 4 Cdn -->
    <script src="//cdn.ckeditor.com/4.20.2/basic/ckeditor.js"></script>


    <title>Sembol Metal | Admin Paneli</title>
</head>

<body id="admin">

    <!-- Admin Bar Section Start -->
    <section id="adminBar" class="bg-dark text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <small>Admin Paneline Hoşgeldin</small>
                </div>
                <div class="col-2 text-right">
                    <a href="logout.php"><small>Güvenli Çıkış</small></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Admin Bar Section End -->

    <!-- Admin Content Section Start -->
    <section id="adminContent">
        <div class="container-fluid">
            <div class="row" style="height:96vh;">
                <div class="col-md-2 bg-dark">
                    <ul class="list-group">
                        <a href="dashboard.php">
                            <li class="list-group-item bg-transparent border-0">Başlangıç</li>
                        </a>
                        <a href="kategoriler.php">
                            <li class="list-group-item bg-transparent border-0">Kategoriler</li>
                        </a>
                        <a href="urunler.php">
                            <li class="list-group-item bg-transparent border-0">Ürünler</li>
                        </a>
                        <a href="maliyet.php">
                            <li class="list-group-item bg-transparent border-0">Maliyet Hesaplama</li>
                        </a>
                        <a href="mainpage.php">
                            <li class="list-group-item bg-transparent border-0">Ana Sayfa Ayarları</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-10 py-5">