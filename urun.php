<?php
require_once('header.php');

$id = $_GET['id'];
$urun = $db->prepare('select * from urunler where id=?');
$urun->execute(array($id));
$urunSatir = $urun->fetch();

$maliyet = $db->prepare('select * from maliyet');
$maliyet->execute();
$maliyetSatir = $maliyet->fetch();

$topFiyat = $urunSatir['bazfiyat'] + $maliyetSatir['topmaliyet'];
?>

<!-- Product Section Start -->
<section id="productPage" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <img src="<?php echo substr($urunSatir['gorsel1'], 3) ?>" alt="" data-target="#carouselExampleIndicators" data-slide-to="0" class="active w-25 mr-2">
                        <img src="<?php echo substr($urunSatir['gorsel2'], 3) ?>" alt="" data-target="#carouselExampleIndicators" data-slide-to="1" class="w-25 mr-2">
                        <img src="<?php echo substr($urunSatir['gorsel3'], 3) ?>" alt="" data-target="#carouselExampleIndicators" data-slide-to="2" class="w-25 mr-2">
                        <img src="<?php echo substr($urunSatir['gorsel4'], 3) ?>" alt="" data-target="#carouselExampleIndicators" data-slide-to="3" class="w-25">


                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo substr($urunSatir['gorsel1'], 3) ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo substr($urunSatir['gorsel2'], 3) ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo substr($urunSatir['gorsel3'], 3) ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo substr($urunSatir['gorsel4'], 3) ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>


            </div>
            <div class="col-md-6">
                <h1><?php echo $urunSatir['urunadi']; ?></h1>
                <span><?php echo $topFiyat; ?> ₺</span><br>
                <?php echo $urunSatir['kisaaciklama']; ?>
                <form action="basket.php" method="get" class="form-row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" name="" id="" class="form-control" value="1" style="font-weight: 600;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="submit" value="Sepete Ekle" class="btn btn-outline-dark">
                        </div>
                    </div>
                    <div class="col-12">
                        <small>S.T.K: <?php echo $urunSatir['stokkodu']; ?></small><br>
                        <small>Kategori: <a href="kategori.php?kat=<?php echo $urunSatir['kategori']; ?>"><?php echo $urunSatir['kategori']; ?></a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Product Description Start -->
<section id="description" class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Açıklama</button>
                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Özellikler</button>
                        <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Yorumlar</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php echo $urunSatir['aciklama']; ?>
                    </div>
                    <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php echo $urunSatir['ozellikler']; ?>
                    </div>
                    <div class="tab-pane fade pt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Ürün Yorumları Gelecek</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Description End -->

<!-- Related Products Section Start -->
<section id="related" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>İlgili Ürünler</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php"><?php echo $urunSatir['ilgiliurun1']; ?></a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php"><?php echo $urunSatir['ilgiliurun2']; ?></a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php"><?php echo $urunSatir['ilgiliurun3']; ?></a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php"><?php echo $urunSatir['ilgiliurun4']; ?></a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Products Section End -->

<?php require_once('footer.php') ?>