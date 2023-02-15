<?php require_once('header.php') ?>
<!-- İnsan Kaynakları Banner Section Start -->
<section id="insanbanner" class="py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">İnsan Kaynakları</h1>
            </div>
        </div>
    </div>
</section>
<!-- İnsan Kaynakları Banner Section End -->
<!-- İnsan Kaynakları Form Section Start -->
<section id="insanKaynaklari" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Bize Katılın</h2>
                <hr>
                <form method="post" class="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Adınız Soyadınız<small style="color: red"> * </small></label>
                            <input type="text" name="adiniz" id="Adınız" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Posta Adresiniz<small style="color:red"> * </small></label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Telefon<small style="color: red;"> * </small></label>
                            <input type="tel" name="telefon" id="telefon" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cv'nizi Yükleyin<small style="color: red;"> * </small></label>
                            <input type="file" name="cvyukle" id="cvyukle">
                        </div>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-12">
                                <label>Mesajınız</label>
                                <textarea name="mesaj" id="mesaj" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-dark w-100 form-control" value="Gönder">
                            </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/insankaynaklari-540x497.webp" alt="">
            </div>
        </div>
    </div>
</section>
<!-- İnsan Kaynakları Form Section End -->

<?php require_once('footer.php') ?>