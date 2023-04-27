<?php
require_once('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $profilSil = $db->prepare('delete from profilekle where id=?');
    $profilSil->execute(array($id));
} elseif (isset($_GET['ebat'])) {
    echo '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      $("#myModal").modal("show");
    });
    </script>
    ';

    $ebat = $_GET['ebat'];
    $profilDuzenle = $db->prepare('select * from profilekle where ebat=?');
    $profilDuzenle->execute(array($ebat));
    $profilDuzenleSatir = $profilDuzenle->fetch();
}
?>

<!-- Profil Ekleme Start-->
<section id="profilEkle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h5>Profil Ekleme</h5>
            </div>
            <div class="col-md-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
                    Yeni Profil Ekle
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Yeni Profil Ekleme</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="text-left">
                                    <div class="form-group">
                                        <label>Ebat</label>
                                        <input type="text" name="ebat" placeholder="Ör: 10x10x0,80 DKP" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>600cm Fiyatı <span class="text-danger">(Kuruş Bilgisini nokta ile giriniz)</span> </label>
                                        <input type="text" name="fiyat6m" placeholder="Ör: 50.70" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Malzeme Türü</label>
                                        <select name="malTuru" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Alüminyum">Alüminyum</option>
                                            <option value="Paslanmaz">Paslanmaz</option>
                                            <option value="Demir">Demir</option>
                                            <option value="Ahşap">Ahşap</option>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                <input type="submit" value="Kaydet" class="btn btn-success" name="profilekle">
                            </div>
                            </form>
                            <?php
                            if (isset($_POST['profilekle'])) {
                                $ebat = $_POST['ebat'];
                                $fiyat6m = $_POST['fiyat6m'];
                                $malTuru = $_POST['malTuru'];
                                $profil = $db->prepare('insert into profilekle(ebat,fiyat6m,malTuru) values(?,?,?)');
                                $profil->execute(array($ebat, $fiyat6m, $malTuru));

                                if ($profil->rowCount()) {
                                    echo '<script>alert("Kayıt Eklendi)</script>';
                                } else {
                                    echo '<script>alert("Hata Oluştu")</script>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profil Ekleme End-->

<!-- Kayıtlı Profil Listesi Start -->
<section id="profilList" class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ebat</th>
                            <th class="text-center">600 cm Fiyatı</th>
                            <th class="text-center">Türü</th>
                            <th class="text-center">Düzenle</th>
                            <th class="text-center">Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $profilList = $db->prepare('select * from profilekle order by ebat');
                        $profilList->execute();

                        if ($profilList->rowCount()) {
                            foreach ($profilList as $profilListSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $profilListSatir['ebat']; ?></td>
                                    <td class="text-center"><?php echo $profilListSatir['fiyat6m']; ?>₺</td>
                                    <td class="text-center"><?php echo $profilListSatir['malTuru']; ?></td>
                                    <td class="text-center"><a href="profil-ekle.php?ebat=<?php echo $profilListSatir['ebat']; ?>" class="btn btn-warning">Düzenle</a></td>
                                    <td class="text-center"><a href="profil-ekle.php?id=<?php echo $profilListSatir['id']; ?>" class="btn btn-danger">Sil</a></td>
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
<!-- Kayıtlı Profil Listesi End -->


<!-- Profil Güncelleme Modal Start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Güncellenen Profil: <?php echo $profilDuzenleSatir['ebat']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Ebat</label>
                        <input type="text" name="ebatGuncelle" value="<?php echo $profilDuzenleSatir['ebat']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>600cm Fiyatı <span class="text-danger">(Kuruş Bilgisini nokta ile giriniz)</span> </label>
                        <input type="text" name="fiyat6mGuncelle" value="<?php echo $profilDuzenleSatir['fiyat6m']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Malzeme Türü</label>
                        <select name="malTuruGuncelle" class="form-control">
                            <option value="<?php echo $profilDuzenleSatir['malTuru']; ?>"><?php echo $profilDuzenleSatir['malTuru']; ?></option>
                            <option value="Alüminyum">Alüminyum</option>
                            <option value="Paslanmaz">Paslanmaz</option>
                            <option value="Demir">Demir</option>
                            <option value="Ahşap">Ahşap</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <input type="submit" value="Güncelle" class="btn btn-success" name="profilGuncelle">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['profilGuncelle'])){
    $ebatGuncelle = $_POST['ebatGuncelle'];
    $fiyat6mGuncelle = $_POST['fiyat6mGuncelle'];
    $malTuruGuncelle = $_POST['malTuruGuncelle'];

    $profilGuncelle = $db -> prepare('update profilekle set ebat=?, fiyat6m=?, malTuru=? where id=?');
    $profilGuncelle -> execute(array($ebatGuncelle,$fiyat6mGuncelle,$malTuruGuncelle,$profilDuzenleSatir['id']));

    if($profilGuncelle -> rowCount()){
        echo '<script>alert("Kayıt Güncellendi")</script><meta http-equiv="refresh" content="0; url=profil-ekle.php">';
    } else {
        echo '<script>alert("Hata Oluştu")</script>';
    }
}
?>

<!-- Profil Güncelleme Modal End -->

<?php require_once('footer.php'); ?>