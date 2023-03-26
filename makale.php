<?php
require_once('header.php');
$id = $_GET['id'];
$makale = $db->prepare('select * from makale where id=?');
$makale->execute(array($id));
$makaleSatir = $makale->fetch();
?>

<!-- Makale Banner Section Start -->
<section id="makaleBanner" class="py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4"><?php echo $makaleSatir['baslik']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Makale Banner Section End -->
<!-- Makale Section Start -->
<section id="makale" class="py-5">
    <div class="container">
        <div class="row">
            <!-- Makale Start -->
            <div class="col-md-9">
                <img src="<?php echo substr($makaleSatir['gorsel'], 3); ?>" class="img-fluid" alt="<?php echo $makaleSatir['altEtiketi']; ?>">
                <h2 class="my-3 text-center"><?php echo $makaleSatir['baslik']; ?></h2>
                <hr>
                <small>Yayın Tarihi:<?php echo $makaleSatir['tarih']; ?></small>
                <p class="mt-3"><?php echo $makaleSatir['icerik']; ?></p>
            </div>
            <!-- Makale End -->
            <!-- Aside Start -->
            <div class="col-md-3">
                <img src="img/makalemain1-285x177.webp" alt="">
                <h5 class="pt-5">Popüler Yazılar</h5>
                <hr>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eveniet? Velit illum minima ex consequatur.</p>
                <h5 class="pt-5">Sizin İçin Seçtiklerimiz</h5>
                <hr>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/dresuar-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/sehpe-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/masa-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <h5>Kategoriler</h5>
                <hr>
                <a href="">Dresuar</a><br>
                <a href="">Sandalyeler</a><br>
                <a href="">Koltuklar</a><br>
                <a href="">Büfe ve Kitaplık</a><br>
                <a href="">Sehpalar</a><br>
                <a href="">Masalar</a><br>
                <a href="">Bar Sandalyeleri</a>
            </div>
            <!-- Aside End -->
        </div>
    </div>
</section>
<!-- Makale Section End -->

<?php require_once('footer.php') ?>