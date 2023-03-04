<?php
require_once('header.php');

$id = $_GET['id'];
$katduzenle = $db->prepare('select * from kategoriler where id=?');
$katduzenle->execute(array($id));
$katduzenleSatir = $katduzenle->fetch();
?>

<section id="kategoriler">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Kategori Ekle</h5>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="katadi" value="<?php echo $katduzenleSatir['katadi']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="katturu" class="form-control">
                            <option value="<?php echo $katduzenleSatir['katturu']; ?>"><?php echo $katduzenleSatir['katturu']; ?></option>
                            <option value="Ana Kategori">Ana Kategori</option>
                            <option value="Alt Kategori">Alt Kategori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ustkatturu" class="form-control">
                            <option value="<?php echo $katduzenleSatir['ustkatturu']; ?>"><?php echo $katduzenleSatir['ustkatturu']; ?></option>
                            <?php
                            $ustkatlist = $db->prepare('select * from kategoriler order by katadi');
                            $ustkatlist->execute();

                            if ($ustkatlist->rowCount()) {
                                foreach ($ustkatlist as $ustkatlistSatir) {
                            ?>
                                    <option value="<?php echo $ustkatlistSatir['katadi']; ?>"><?php echo $ustkatlistSatir['katadi']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="kataciklama" rows="5" class="form-control"><?php echo $katduzenleSatir['kataciklama']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <img src="<?php echo $katduzenleSatir['gorsel']; ?>" width="20%"> <br><br>
                        <input type="file" name="gorsel" id="gorsel" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kaydet" class="w-100 btn btn-success" name="katkaydet">
                    </div>
                </form>
                <?php

                if ($_POST) {
                    $katadi = $_POST['katadi'];
                    $katturu = $_POST['katturu'];
                    $ustkatturu = $_POST['ustkatturu'];
                    $kataciklama = $_POST['kataciklama'];
                    $gorsel = '../img/' . $_FILES['gorsel']['name'];

                    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
                        $katUpdate = $db->prepare('update kategoriler set katadi=?,katturu=?,ustkatturu=?,kataciklama=?,gorsel=? where id=?');
                        $katUpdate->execute(array($katadi, $katturu, $ustkatturu, $kataciklama, $gorsel, $id));

                        if ($katUpdate->rowCount()) {
                            echo '<div class="alert alert-success text-center">Kayıt Güncellendi</div><meta http-equiv="refresh" content="1; url=kategoriler.php">';
                        } else {
                            echo '<div class="alert alert-danger text-center">Hata Oluştu</div>';
                        }
                    }
                }
                ?>

            </div>
            <div class="col-md-8">
                <h5>Kategori Listesi</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Görsel</th>
                            <th>Adı</th>
                            <th>Türü</th>
                            <th>Üst Kategorisi</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $katlist = $db->prepare('select * from kategoriler');
                        $katlist->execute();
                        if ($katlist->rowCount()) {
                            foreach ($katlist as $katlistSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $katlistSatir['id']; ?></td>
                                    <td><img src="<?php echo $katlistSatir['gorsel']; ?>" class="img-fluid"></td>
                                    <td><?php echo $katlistSatir['katadi']; ?></td>
                                    <td><?php echo $katlistSatir['katturu']; ?></td>
                                    <td><?php echo $katlistSatir['ustkatturu']; ?></td>
                                    <td><?php echo $katlistSatir['kataciklama']; ?></td>                                    
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>