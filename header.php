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

  <link rel="icon" href="img/sembol-metal-icon.ico" type="image/x-icon" />

  <!-- Whatsapp Sticky -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
              <ul class="navbar-nav ml-auto">
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
                <!-- <li class="nav-item">
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
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>
                <li class="nav-item ml-4">
                  <a class="nav-link btn btn-warning text-dark" data-toggle="modal" data-target="#projemVar">Projem Var</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->


  <!-- Projem Var Modal Start -->
  <div class="modal fade" id="projemVar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="projemVar" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projemVar">Projenizi Gönderin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data" class="form-row">
            <div class="col-12">
              <div class="form-group">
                <input type="text" name="adi" class="form-control" placeholder="Adınız Soyadınız">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="tel" name="telefon" placeholder="Telefon Numaranız" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="eposta" placeholder="E-Posta Adresiniz" class="form-control">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea name="mesaj" placeholder="Mesajınız" rows="5" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label>Projenizi Yükleyin</label><br>
                <input type="file" name="proje" required>
              </div>
            </div>
            <div class="col-md-3 my-auto text-right">
              <input type="submit" value="Gönder" class="btn btn-success" name="projemvar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Projem Var Modal End -->

  <?php

if(isset($_POST['projemvar'])){
  $adi = $_POST['adi'];
  $telefon = $_POST['telefon'];
  $eposta = $_POST['eposta'];
  $mesaj = $_POST['mesaj'];
  $proje = './docs/'.$_FILES['proje']['name'];
}

  ?>