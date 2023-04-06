<?php require_once('header.php') ?>

<!-- Banner Section Start -->
<section class="banner py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">İletişim</h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Info Section Start -->
<section id="contactInfo" class="text-center py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Bize Ulaşın</h2>
                <p class="text-muted">Bize aşağıdaki iletişim bilgilerimizden her zaman ulaşabilirisiniz.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-6">
                <i class="bi bi-telephone"></i> <br>
                <span>Telefon</span><br>
                <a href="tel:+9">0555 555 5555</a>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-envelope-open"></i> <br>
                <span>E-Posta</span> <br>
                <a href="mailto:info@sembolmetal.com">info@sembolmetal.com</a>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-whatsapp"></i> <br>
                <span>Whatsapp</span> <br>
                <a href="https://wa.me/+9">0555 555 5555</a>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-geo-alt"></i> <br>
                <span>Konum</span> <br>
                <a href="https://goo.gl/maps/ewvZUarYZiZe4uda8" target="_blank">Haritada Gör</a>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- Info Section End -->

<!-- Contact Form Section Start -->
<section id="contactForm" class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <form method="post" class="form-row bg-light p-4 border">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="adiniz" placeholder="Adınız Soyadınız" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" name="telefon" placeholder="Telefon Numaranız" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-Posta Adresiniz" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="konu" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="bilgi">Bilgi Talebi</option>
                            <option value="sikayet">Şikayet</option>
                            <option value="teklif">Fiyat Teklifi</option>
                            <option value="siparis">Ürün Siparişi</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="mesaj" placeholder="Mesajınız" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gönder" class="btn btn-success w-100" name="iletisimForm">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['iletisimForm'])) {
                    $adiniz = $_POST['adiniz'];
                    $telefon = $_POST['telefon'];
                    $email = $_POST['email'];
                    $konu = $_POST['konu'];
                    $mesaj = $_POST['mesaj'];

                    $iletisim = $db->prepare('insert into iletisim(adiniz,telefon,email,konu,mesaj) values(?,?,?,?,?)');
                    $iletisim->execute(array($adiniz, $telefon, $email, $konu, $mesaj));

                    if ($iletisim->rowCount()) {
                        echo '<div class="alert alert-success text-center">Mesajınız İletilmiştir.</div>';
                    } else {
                        echo '<div class="alert alert-danger text-center">Hata Oluştu. Lütfen Tekrar Deneyiniz.</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section End -->

<!-- Maps Section Start -->
<section id="maps">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d752.6852928584018!2d29.161834!3d41.009038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cacf22ac2499a7%3A0x7cc64062bce575d4!2sYukar%C4%B1%20Dudullu%2C%20Rana%20Sk.%20No%3A9%2C%2034775%20Dudullu%20Osb%2F%C3%9Cmraniye%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1676362982306!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Maps Section End -->


<?php require_once('footer.php') ?>