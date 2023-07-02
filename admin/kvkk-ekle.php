<?php
require_once('header.php');

$kvkk = $db->prepare('select * from kvkk order by id desc limit 1');
$kvkk->execute();
$kvkkSatir = $kvkk->fetch();
?>

<!-- Kvkk Ekle Section Start -->
<section id="kvkkEkle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>K.V.K.K Metni Ekle</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="form-group">
                        <textarea name="kvkkmetni">
                            <?php echo $kvkkSatir['kvkkmetni']; ?>
                        </textarea>
                        <script>
                            CKEDITOR.replace('kvkkmetni', {
                                height: 400
                            });
                        </script>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" value="Kaydet" class="btn btn-success">
                    </div>
                </form>
                <?php
                if ($_POST) {
                    $kvkkGuncelle = $db->prepare('update kvkk set kvkkmetni=? where id=?');
                    $kvkkGuncelle->execute(array($_POST['kvkkmetni'], $kvkkSatir['id']));

                    if ($kvkkGuncelle->rowCount()) {
                        echo '<script>alert("K.v.k.k Metnininiz Kayıt Edildi")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=kvkk-ekle.php">';
                    } else {
                        echo '<script>alert("Hata Oluştu Lütfen Tekrar Deneyin")</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Kvkk Ekle Section End -->

<?php require_once('footer.php'); ?>