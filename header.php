<?php
session_start();
require_once('baglan.php');
?>

<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

  <link rel="icon" href="img/sembol-metal-icon.ico" type="image/x-icon" />

  <title>Sembol Metal | </title>
</head>

<body>

  <!-- Header Section Start -->
  <header id="header" class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php"><img src="img/sembol-metal-logo-beyaz-156x105.webp" alt="Sembol Metal Logo" class="w-25"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Ana Sayfa</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Kurumsal
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="hakkimizda.php">Hakkımızda</a>
                    <a class="dropdown-item" href="insan-kaynaklari.php">İnsan Kaynakları</a>
                    <a class="dropdown-item" href="kvkk.php">K.V.K.K</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="urunler.php">Ürünler</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="referanslar.php">Referanslar</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Projeler
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="projeler.php">Kurumsal Projeler</a>
                    <a class="dropdown-item" href="projeler.php">Ev Projeleri</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->