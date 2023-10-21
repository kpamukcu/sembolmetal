<?php require_once('header.php'); ?>
<?php /* require_once('slider.php'); */ ?>

<!-- Banner Section Start -->
<section class="banner py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Sembol Metal</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- About Us Section Start -->
<?php
$indexHakkimizda = $db->prepare('select * from hakkimizda order by id desc limit 1');
$indexHakkimizda->execute();
$indexHakkimizdaSatir = $indexHakkimizda->fetch();
?>
<section id="aboutUs" class="text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Hakkımızda</h2>
                <p class="text-justify"><?php echo $indexHakkimizdaSatir['tarihceAciklama']; ?></p>
                <a href="hakkimizda.php" class="btn btn-outline-dark">Devamını Okuyun</a>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Proje ve Ürün Fikirleri Section Start -->
<?php
$boxes = $db->prepare('select * from anasayfaboxes order by id desc limit 1');
$boxes->execute();
$boxesSatir = $boxes->fetch();
?>
<section id="talep" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2><?php echo $boxesSatir['baslik1']; ?></h2>
                        <p><?php echo $boxesSatir['aciklama1']; ?></p><br>

                        <!-- Button trigger modal -->
                        <a data-toggle="modal" data-target="#staticBackdrop" style="cursor: pointer;"><b>Projenizi Göndermek ve Fiyat Teklifi Almak için Tıklayın</b></a>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Projenizi Gönderin</h5>
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

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2><?php echo $boxesSatir['baslik2']; ?></h2>
                        <p><?php echo $boxesSatir['aciklama2']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2><?php /* echo $boxesSatir['baslik3']; */ ?></h2>
                        <p><?php /* echo $boxesSatir['aciklama3']; */ ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-left"><?php /* echo $boxesSatir['baslik4']; */ ?></h2>
                        <a href="<?php /* echo substr($boxesSatir['katalog'], 3); */ ?>" target="blank">
                        <img src="img/sembol-metal-katalog.webp" alt="Sembol Metal Katalog" class="w-25">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- Proje ve Ürün Fikirleri Section End -->

<?php require_once('footer.php') ?>