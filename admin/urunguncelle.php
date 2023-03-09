<?php

require_once('header.php');

if ($_GET) {
    $id = $_GET['id'];
    $urunList = $db->prepare('select * from urunler where id=?');
    $urunList->execute(array($id));
    $urunListSatir = $urunList->fetch();
}

?>

<!-- Ürün Güncelle Start -->
<section id="urunGuncelle">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h5>Ürün Güncelle</h5>
            </div>
        </div>
        <form method="post" enctype="multipart/form-data" class="form-row">
            <div class="col-md-3">
                <div class="form-group">
                    <img src="<?php echo $urunListSatir['gorsel1']; ?>" class="w-50 mb-2">
                    <input type="file" name="gorsel1" class="w-100">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <img src="<?php echo $urunListSatir['gorsel2']; ?>" class="w-50 mb-2">
                    <input type="file" name="gorsel2" class="w-100">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <img src="<?php echo $urunListSatir['gorsel3']; ?>" class="w-50 mb-2">
                    <input type="file" name="gorsel3" class="w-100">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <img src="<?php echo $urunListSatir['gorsel4']; ?>" class="w-50 mb-2">
                    <input type="file" name="gorsel4" class="w-100">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Ürün Adı</label>
                    <input type="text" name="urunadi" value="<?php echo $urunListSatir['urunadi']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Genişlik</label>
                    <input type="text" name="genislik" value="<?php echo $urunListSatir['genislik']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Derinlik</label>
                    <input type="text" name="derinlik" value="<?php echo $urunListSatir['derinlik']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Yükseklik</label>
                    <input type="text" name="yukseklik" value="<?php echo $urunListSatir['yukseklik']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ürün Açıklaması</label>
                    <textarea name="aciklama" rows="7" class="form-control"><?php echo $urunListSatir['aciklama']; ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ürün Özellikleri</label>
                    <textarea name="ozellikler" rows="7" class="form-control"><?php echo $urunListSatir['ozellikler']; ?></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Baz Fiyat (Maliyet Hariç)</label>
                    <input type="text" name="bazfiyat" value="<?php echo $urunListSatir['bazfiyat']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Stok Kodu</label>
                    <input type="text" name="stokkodu" value="<?php echo $urunListSatir['stokkodu']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Ürün Kategorisi</label>
                    <select name="kategori" class="form-control">
                        <option value="<?php echo $urunListSatir['kategori']; ?>"><?php echo $urunListSatir['kategori']; ?></option>
                        <?php
                        $urunkat = $db->prepare('select * from kategoriler order by katadi asc');
                        $urunkat->execute();
                        if ($urunkat->rowCount()) {
                            foreach ($urunkat as $urunkatSatir) {
                        ?>
                                <option value="<?php echo $urunkatSatir['katadi']; ?>"><?php echo $urunkatSatir['katadi']; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label>Stok Adet</label>
                    <input type="number" name="stokadet" value="<?php echo $urunListSatir['stok']; ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Ürün Durumu</label>
                    <select name="durum" class="form-control">
                        <option value="<?php echo $urunListSatir['durum']; ?>"><?php echo $urunListSatir['durum']; ?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                </div>
            </div>
            <div class="col-12 text-center">
                <input type="submit" value="Güncelle" class="btn btn-success w-25">
            </div>
        </form>
        <?php
        if ($_POST) {
            // $gorsel1 = '../img/'.$_FILES['gorsel1']['name'];
            // $gorsel2 = '../img/'.$_FILES['gorsel2']['name'];
            // $gorsel3 = '../img/'.$_FILES['gorsel3']['name'];
            // $gorsel4 = '../img/'.$_FILES['gorsel4']['name'];

            if (!isset($_FILES['gorsel1']['name'])) {
                $gorsel1 = $urunListSatir['gorsel1'];
            } else {
                $gorsel1 = '../img/' . $_FILES['gorsel1']['name'];
            }

            if (!isset($_FILES['gorsel2']['name'])) {
                $gorsel2 = $urunListSatir['gorsel2'];
            } else {
                $gorsel2 = '../img/' . $_FILES['gorsel2']['name'];
            }

            if (!isset($_FILES['gorsel3']['name'])) {
                $gorsel3 = $urunListSatir['gorsel3'];
            } else {
                $gorsel3 = '../img/' . $_FILES['gorsel3']['name'];
            }

            if (!isset($_FILES['gorsel4']['name'])) {
                $gorsel4 = $urunListSatir['gorsel4'];
            } else {
                $gorsel4 = '../img/' . $_FILES['gorsel4']['name'];
            }

            $urunadi = $_POST['urunadi'];
            $genislik = $_POST['genislik'];
            $derinlik = $_POST['derinlik'];
            $yukseklik = $_POST['yukseklik'];
            $aciklama = $_POST['aciklama'];
            $ozellikler = $_POST['ozellikler'];
            $bazfiyat = $_POST['bazfiyat'];
            $stokkodu = $_POST['stokkodu'];
            $kategori = $_POST['kategori'];
            $stokadet = $_POST['stokadet'];
            $durum = $_POST['durum'];

            if (move_uploaded_file($_FILES['gorsel1']['tmp_name'], $gorsel1) || move_uploaded_file($_FILES['gorsel2']['tmp_name'], $gorsel2) || move_uploaded_file($_FILES['gorsel3']['tmp_name'], $gorsel3) || move_uploaded_file($_FILES['gorsel4']['tmp_name'],$gorsel4)) {
                $urunGuncelle = $db->prepare('update urunler set gorsel1=?, gorsel2=?, gorsel3=?, gorsel4=?, urunadi=?, genislik=?, derinlik=?, yukseklik=?, aciklama=?, ozellikler=?, bazfiyat=?, stokkodu=?, kategori=?, stok=?, durum=? where id=?');
                $urunGuncelle->execute(array($gorsel1, $gorsel2, $gorsel3, $gorsel4, $urunadi, $genislik, $derinlik, $yukseklik, $aciklama, $ozellikler, $bazfiyat, $stokkodu, $kategori, $stokadet, $durum, $id));

                if ($urunGuncelle->rowCount()) {
                    echo '<div class="alert alert-success">Kayıt Güncellendi</div><meta http-equiv="refresh" content="1; url=urunler.php">';
                } else {
                    echo '<div class="alert alert-danger">Hata Oluştu</div>';
                }
            }
        }
        ?>
    </div>
</section>
<!-- Ürün Güncelle End -->

<?php require_once('footer.php'); ?>