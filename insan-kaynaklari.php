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
                            <input type="text" name="adiniz" id="adiniz" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Posta Adresiniz</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Telefon<small style="color: red;"> * </small></label>
                            <input type="tel" name="telefon" id="telefon" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cv'nizi Yükleyin<small style="color: red;"> * </small></label>
                            <input type="file" name="cv">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Mesajınız</label>
                            <textarea name="mesaj" id="mesaj" rows="8" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-dark w-100" value="Gönder" name="cvYukle">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['cvYukle'])) {
                    $adiniz = $_POST['adiniz'];
                    $email = $_POST['email'];
                    $telefon = $_POST['telefon'];
                    $cv = './docs/' . $_FILES['cv']['name'];
                    $mesaj = $_POST['mesaj'];

                    if (move_uploaded_file($_FILES['cv']['tmp_name'], $cv)) {
                        $ik = $db->prepare('insert into insankaynaklari(adiniz,email,telefon,cv,mesaj) values(?,?,?,?,?)');
                        $ik->execute(array($adiniz, $email, $telefon, $cv, $mesaj));

                        if ($ik->rowCount()) {
                            echo '<div class="alert alert-success text-center">Başvurunuz Tarafımıza Ulaşmıştır.</div>';
                        } else {
                            echo '<div class="alert alert-danger text-center">Hata Oluştu. Lütfen Tekrar Deneyin</div>';
                        }
                    }
                }
                ?>
            </div>
            <div class="col-md-6">
                <img src="img/insankaynaklari-540x497.webp" alt="Sembol Metal İnsan Kaynakları">
            </div>
        </div>
    </div>
</section>
<!-- İnsan Kaynakları Form Section End -->

<?php require_once('footer.php') ?>