<?php
require_once('header.php');

$maliyet = $db -> prepare('select * from maliyet');
$maliyet -> execute();
$maliyetSatir = $maliyet -> fetch();
?>

<!-- Banner Section Start -->
<section class="banner py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Ürünlerimiz</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Categories Section Start -->
<!-- <section id="categories" class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h3>Kategori Adı</h3>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h3>Kategori Adı</h3>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h3>Kategori Adı</h3>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->

<!-- Products Section Start -->
<section id="products" class="py-5">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <small class="text-muted">SEMBOL METAL</small>
                <h3>ÜRÜNLERİMİZ</h3>
            </div>
        </div>
        <div class="row my-5">

            <?php
            $urunList = $db->prepare('select * from urunler order by id limit 8');
            $urunList->execute();

            if ($urunList->rowCount()) {
                foreach ($urunList as $urunListSatir) {
            ?>
                    <div class="col-md-3">
                        <div class="card">
                            <a href="urun.php?id=<?php echo $urunListSatir['id']; ?>"><img src="<?php echo substr($urunListSatir['gorsel1'], 3) ?>" alt="" class="img-fluid"></a>
                            <div class="card-footer border-0">
                                <div class="row">
                                    <div class="col-9 px-0">
                                        <h2><a href="urun.php?id=<?php echo $urunListSatir['id']; ?>"><?php echo $urunListSatir['urunadi']; ?></a></h2>
                                        <small><a href="kategori.php?kat=<?php echo $urunListSatir['kategori']; ?>"><?php echo $urunListSatir['kategori']; ?></a></small>
                                    </div>
                                    <div class="col-3 text-right px-0">
                                        <?php // echo $urunListSatir['bazfiyat']+$maliyetSatir['topmaliyet']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
</section>
<!-- Products Section End -->

<!-- Info Section Start -->
<section id="info" class="py-11 text-center">
    <div class="container">
        <div class="row border py-4 px-5">
            <div class="col-md-4">
                <i class="bi bi-patch-check"></i> <br>
                <span class="boldText">Kaliteli Hammadde</span><br>
                <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
            <div class="col-md-4">
                <i class="bi bi-gear"></i> <br>
                <span class="boldText">Hızlı Üretim</span><br>
                <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
            <div class="col-md-4">
                <i class="bi bi-truck"></i> <br>
                <span class="boldText">Hızlı Teslimat</span><br>
                <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing</span>
            </div>
        </div>
    </div>
</section>
<!-- Info Section End -->

<?php require_once('footer.php') ?>