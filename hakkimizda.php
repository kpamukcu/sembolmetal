<?php require_once('header.php') ?>

<!-- Banner Section Start -->
<section class="banner py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Hakkımızda</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Content Section Start -->
<?php

$hakkimizda = $db -> prepare('select * from hakkimizda order by id desc limit 1');
$hakkimizda -> execute();
$hakkimizdaSatir = $hakkimizda -> fetch();
?>
<section id="aboutUs" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo substr($hakkimizdaSatir['tarihceGorsel'],3); ?>" alt="Tarihçemiz" class="img-fluid">
            </div>
            <div class="col-md-6 my-auto text-justify">
                <h2><?php echo $hakkimizdaSatir['tarihce']; ?></h2>
                <p><?php echo $hakkimizdaSatir['tarihceAciklama']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-auto text-justify">
                <h2><?php echo $hakkimizdaSatir['misyon']; ?></h2>
                <p><?php echo $hakkimizdaSatir['misyonAciklama']; ?></p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo substr($hakkimizdaSatir['misyonGorsel'],3); ?>" alt="Misyonumuz" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo substr($hakkimizdaSatir['vizyonGorsel'],3); ?>" alt="Vizyonumuz" class="img-fluid">
            </div>
            <div class="col-md-6 my-auto text-justify">
                <h2><?php echo $hakkimizdaSatir['vizyon']; ?></h2>
                <p><?php echo $hakkimizdaSatir['vizyonAciklama']; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- Content Section End -->

<!-- Tanıtım Video Section Start -->
<section id="video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <video src="img/sky.mp4" controls class="w-100"></video>
            </div>
        </div>
    </div>
</section>
<!-- Tanıtım Video Section End -->

<?php require_once('footer.php') ?>