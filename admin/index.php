<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <link rel="icon" href="img/sembol-metal-icon.ico" type="image/x-icon" />


    <title>Sembol Metal | Admin Paneli</title>
</head>

<body>

    <!-- Admin Panel Login Start -->
    <section id="login">
        <div class="container">
            <div class="row" style="height:70vh;">
                <div class="col-6 text-center mx-auto my-auto">
                    <div class="card bg-light shadow">
                        <div class="card-body">
                            <img src="../img/sembol-metal-logo-siyah-156x105.webp" alt="" class="mb-5">
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="kadi" placeholder="Kullanıcı Adınız" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="sifre" placeholder="Şifreniz" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Giriş Yap" class="btn btn-success w-100">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    if ($_POST) {
                        $kadi = $_POST['kadi'];
                        $sifre = $_POST['sifre'];

                        if($kadi == 'smbl' && $sifre='SembolMetal2023**'){
                            $_SESSION['user'] = $kadi;
                            echo '<div class="alert alert-success">Kullanıcı Adı ve Şifreniz Doğru</div>
                            <meta http-equiv="refresh" content="1; url=dashboard.php">';
                        } else {
                            echo '<div class="alert alert-danger">Kullanıcı Adı ve/veya Şifreniz Hatalı</div>';
                        }                            
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Admin Panel Login End -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

</body>

</html>