<?php require_once('header.php'); ?>

<!-- Box Section Start -->
<?php
$boxes = $db->prepare('select * from anasayfaboxes order by id desc limit 1');
$boxes->execute();
$boxesSatir = $boxes->fetch();
?>
<section id="boxes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-row" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bölüm 1</label>
                            <input type="text" name="baslik1" value="<?php echo $boxesSatir['baslik1']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="aciklama1" rows="5" class="form-control"><?php echo $boxesSatir['aciklama1']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bölüm 2</label>
                            <input type="text" name="baslik2" value="<?php echo $boxesSatir['baslik2']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="aciklama2" rows="5" class="form-control"><?php echo $boxesSatir['aciklama2']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bölüm 3</label>
                            <input type="text" name="baslik3" value="<?php echo $boxesSatir['baslik3']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="aciklama3" rows="5" class="form-control"><?php echo $boxesSatir['aciklama3']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bölüm 4</label>
                            <input type="text" name="baslik4" value="<?php echo $boxesSatir['baslik4']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" name="katalog">
                            <input type="hidden" name="id" value="<?php echo $boxesSatir['id']; ?>">
                            <input type="submit" value="Kaydet" class="btn btn-success" name="boxesKaydet">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['boxesKaydet'])) {
                    $id = $_POST['id'];
                    $baslik1 = $_POST['baslik1'];
                    $aciklama1 = $_POST['aciklama1'];
                    $baslik2 = $_POST['baslik2'];
                    $aciklama2 = $_POST['aciklama2'];
                    $baslik3 = $_POST['baslik3'];
                    $aciklama3 = $_POST['aciklama3'];
                    $baslik4 = $_POST['baslik4'];
                    $katalog = '../docs/' . $_FILES['katalog']['name'];

                    if (move_uploaded_file($_FILES['katalog']['tmp_name'], $katalog)) {
                        $kutuKaydet = $db->prepare('update anasayfaboxes set baslik1=?, aciklama1=?, baslik2=?, aciklama2=?, baslik3=?, aciklama3=?, baslik4=?, katalog=? where id=?');
                        $kutuKaydet->execute(array($baslik1, $aciklama1, $baslik2, $aciklama2, $baslik3, $aciklama3, $baslik4, $katalog, $id));

                        if ($kutuKaydet->rowCount()) {
                            echo '<div class="alert alert-success">Kayıt Başarılı</div><meta http-equiv="refresh" content="1; url=mainpage.php">';
                        } else {
                            echo '<div class="alert alert-danger">Kayıt Başarılı</div><meta http-equiv="refresh" content="1; url=mainpage.php">';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Box Section End -->

<?php require_once('footer.php'); ?>