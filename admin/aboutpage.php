<?php require_once('header.php'); ?>

<!-- About Settings Section Start -->
<section id="aboutSettings">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="lead"><b>Slider Ayarları</b></h3>
            </div>
        </div>
        <!-- Slider Settings Start -->
        <div class="row mt-3">
            <div class="col-12">
                <form action="" method="post" class="form-row" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide1Baslik" placeholder="1. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide1Aciklama" placeholder="1. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>1. Slide Görsel</label>
                            <input type="file" name="slide1Gorsel">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide2Baslik" placeholder="2. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide2Aciklama" placeholder="2. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>2. Slide Görsel</label>
                            <input type="file" name="slide2Gorsel">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide3Baslik" placeholder="3. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide3Aciklama" placeholder="3. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>3. Slide Görsel</label>
                            <input type="file" name="slide3Gorsel">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" value="Kaydet" class="btn btn-success" name="sliderKaydet">
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST['sliderKaydet'])) {
                    $slide1Baslik = $_POST['slide1Baslik'];
                    $slide1Aciklama = $_POST['slide1Aciklama'];
                    $slide1Gorsel = '../img/' . $_FILES['slide1Gorsel']['name'];
                    $slide2Baslik = $_POST['slide2Baslik'];
                    $slide2Aciklama = $_POST['slide2Aciklama'];
                    $slide2Gorsel = '../img/' . $_FILES['slide2Gorsel']['name'];
                    $slide3Baslik = $_POST['slide3Baslik'];
                    $slide3Aciklama = $_POST['slide3Aciklama'];
                    $slide3Gorsel = '../img/' . $_FILES['slide3Gorsel']['name'];

                    if (move_uploaded_file($_FILES['slide1Gorsel']['tmp_name'], $slide1Gorsel) && move_uploaded_file($_FILES['slide2Gorsel']['tmp_name'], $slide2Gorsel) && move_uploaded_file($_FILES['slide3Gorsel']['tmp_name'], $slide3Gorsel)) {
                        $sliderKaydet = $db->prepare('insert into slider(slide1Baslik,slide1Aciklama,slide1Gorsel,slide2Baslik,slide2Aciklama,slide2Gorsel,slide3Baslik,slide3Aciklama,slide3Gorsel) values(?,?,?,?,?,?,?,?,?)');
                        $sliderKaydet->execute(array($slide1Baslik, $slide1Aciklama, $slide1Gorsel, $slide2Baslik, $slide2Aciklama, $slide2Gorsel, $slide3Baslik, $slide3Aciklama, $slide3Gorsel));

                        if ($sliderKaydet->rowCount()) {
                            echo '<div class="alert alert-success text-center">Slider Kaydı Yapıldı</div>';
                        } else {
                            echo '<div class="alert alert-danger text-center">Hata Oluştu</div>';
                        }
                    }
                }
                ?>

                <hr>
            </div>
        </div>
        <!-- Slider Settings End -->
        <div class="row">
            <div class="col-12">
                <h3 class="lead"><b>Hakkımızda Ayarları</b></h3>
                <form method="post" class="form-row mt-4" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tarihçemiz Alanı</label>
                            <input type="text" name="tarihce" placeholder="Başlık Giriniz" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="tarihceAciklama" placeholder="Tarihçemiz Alanı Açıklama Giriniz" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Vizyonumuz Alanı</label>
                            <input type="text" name="vizyon" placeholder="Başlık Giriniz" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="vizyonAciklama" placeholder="Vizyonumuz Alanı Açıklama Giriniz" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Misyonumuz Alanı</label>
                            <input type="text" name="misyon" placeholder="Başlık Giriniz" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="misyonAciklama" placeholder="Misyonumuz Alanı Açıklama Giriniz" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tarihçemiz Görseli</label><br>
                            <input type="file" name="tarihceGorsel">
                        </div>
                        <div class="form-group">
                            <label>Misyonumuz Görseli</label> <br>
                            <input type="file" name="misyonGorsel">
                        </div>
                        <div class="form-group">
                            <label>Vizyonumuz Görseli</label><br>
                            <input type="file" name="vizyonGorsel">
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <div class="form-group">
                            <input type="submit" value="Kaydet" class="btn btn-success" name="hakkimizdaKaydet">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <?php
                if (isset($_POST['hakkimizdaKaydet'])) {
                    $tarihce = $_POST['tarihce'];
                    $tarihceAciklama = $_POST['tarihceAciklama'];
                    $tarihceGorsel = '../img/' . $_FILES['tarihceGorsel']['name'];
                    $vizyon = $_POST['vizyon'];
                    $vizyonAciklama = $_POST['vizyonAciklama'];
                    $vizyonGorsel = '../img/' . $_FILES['vizyonGorsel']['name'];
                    $misyon = $_POST['misyon'];
                    $misyonAciklama = $_POST['misyonAciklama'];
                    $misyonGorsel = '../img/' . $_FILES['misyonGorsel']['name'];

                    if (move_uploaded_file($_FILES['tarihceGorsel']['tmp_name'], $tarihceGorsel) && move_uploaded_file($_FILES['vizyonGorsel']['tmp_name'], $vizyonGorsel) && move_uploaded_file($_FILES['misyonGorsel']['tmp_name'], $misyonGorsel)) {
                        $aboutSave = $db->prepare('insert into hakkimizda(tarihce,tarihceAciklama,tarihceGorsel,vizyon,vizyonAciklama,vizyonGorsel,misyon,misyonAciklama,misyonGorsel) values(?,?,?,?,?,?,?,?,?)');
                        $aboutSave->execute(array($tarihce, $tarihceAciklama, $tarihceGorsel, $vizyon, $vizyonAciklama, $vizyonGorsel, $misyon, $misyonAciklama, $misyonGorsel));

                        if ($aboutSave->rowCount()) {
                            echo '<div class="alert alert-success text-center">Hakkımızda Sayfası Kaydedildi</div>';
                        } else {
                            echo '<div class="alert alert-danger text-center">Hata Oluştu</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- About Settings Section End -->


<?php require_once('footer.php'); ?>