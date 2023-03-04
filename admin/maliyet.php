<?php require_once('header.php'); ?>

<!-- Maliyet Hesaplama Start -->
<section id="maliyetHesaplama">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h5>Ürün Fiyat Listesi</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ürün Adı</th>
                            <th>Stok Kodu</th>
                            <th>Stok Adet</th>
                            <th>Kategori</th>
                            <th>Baz Fiyat</th>
                            <th>Toplam Fiyat</th>
                            <th>Ürüne Git</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <h5 class="text-center">Maliyet Hesaplama</h5>
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="profil" placeholder="Profil Maliyeti" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="kumas" placeholder="Kumaş Maliyeti" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="kargo" placeholder="Kargo Maliyeti" class="form-control" required>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Hesapla" class="btn btn-warning" name="hesapla">
                        <input type="submit" value="Kaydet" class="btn btn-success" name="kaydet">
                    </div>
                </form>

                <?php
                if ($_POST) {
                    $profil = $_POST['profil'];
                    $kumas = $_POST['kumas'];
                    $kargo = $_POST['kargo'];
                    $toplam = $profil + $kumas + $kargo;

                    if (isset($_POST['hesapla'])) {
                        echo '<div class="alert alert-warning text-center">Toplam Maliyet: ' . $toplam . ' ₺</div>';
                    } elseif (isset($_POST['kaydet'])) {

                        $topMaliyet = $db->prepare('update maliyet set topmaliyet=?');
                        $topMaliyet->execute(array($toplam));

                        if ($topMaliyet->rowCount()) {
                            echo '<div class="alert alert-warning text-center">Toplam Maliyet: ' . $toplam . ' ₺</div>';
                            echo '<div class="alert alert-success text-center">Kaydedildi</div>';
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
<!-- Maliyet Hesaplama End -->


<?php require_once('footer.php'); ?>