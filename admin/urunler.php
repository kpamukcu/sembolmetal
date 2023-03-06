<?php

require_once('header.php');

$maliyet = $db->prepare('select * from maliyet');
$maliyet->execute();
$maliyetSatir = $maliyet->fetch();

?>

<!-- Product List Section Start -->
<section id="productList">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5>Ürünler</h5>
            </div>
            <div class="col-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
                    Ürün Ekle
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Yeni Ürün Ekleyin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>1. Görsel</label>
                                        <input type="file" name="gorsel1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>2. Görsel</label>
                                        <input type="file" name="gorsel2">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>3. Görsel</label>
                                        <input type="file" name="gorsel3">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>4. Görsel</label>
                                        <input type="file" name="gorsel4">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ürün Adı</label>
                                        <input type="text" name="urunadi" placeholder="Ürün Adı Girin" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Genişlik</label>
                                        <input type="text" name="genislik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Derinlik</label>
                                        <input type="text" name="derinlik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Yükseklik</label>
                                        <input type="text" name="yukseklik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ürün Açıklaması</label>
                                        <textarea name="aciklama" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ürün Özellikleri</label>
                                        <textarea name="ozellikler" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Baz Fiyat (Maliyet Hariç)</label>
                                        <input type="text" name="bazfiyat" placeholder="Ör: 1500" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Stok Kodu</label>
                                        <input type="text" name="stokkodu" placeholder="Ör: Dr-464-byz" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ürün Kategorisi</label>
                                        <select name="kategori" class="form-control">
                                            <option value="">Kategori Seçiniz</option>
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
                                        <input type="number" name="stokadet" placeholder="1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Ürün Durumu</label>
                                        <select name="durum" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Pasif">Pasif</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    Güncel Maliyet: <?php echo $maliyetSatir['topmaliyet']; ?> ₺
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                    <input type="reset" value="Temizle" class="btn btn-warning">
                                    <input type="submit" value="Kaydet" class="btn btn-success" name="urunkaydet">
                                </div>
                            </div>
                        </div>
                        </form>
                        <?php
                        if (isset($_POST['urunkaydet'])) {
                            $gorsel1 = '../img/' . $_FILES['gorsel1']['name'];
                            $gorsel2 = '../img/' . $_FILES['gorsel2']['name'];
                            $gorsel3 = '../img/' . $_FILES['gorsel3']['name'];
                            $gorsel4 = '../img/' . $_FILES['gorsel4']['name'];
                            $urunadi = $_POST['urunadi'];
                            $genislik = $_POST['genislik'];
                            $derinlik = $_POST['derinlik'];
                            $yukseklik = $_POST['yukseklik'];
                            $aciklama = $_POST['aciklama'];
                            $ozellikler = $_POST['ozellikler'];
                            $bazfiyat = $_POST['bazfiyat'];
                            $stokkodu = $_POST['stokkodu'];
                            $kategori = $_POST['kategori'];
                            $stok = $_POST['stokadet'];
                            $durum = $_POST['durum'];

                            if (move_uploaded_file($_FILES['gorsel1']['tmp_name'], $gorsel1) || move_uploaded_file($_FILES['gorsel2']['tmp_name'], $gorsel2) || move_uploaded_file($_FILES['gorsel3']['tmp_name'], $gorsel3) || move_uploaded_file($_FILES['gorsel4']['tmp_name'], $gorsel4)) {

                                $urunKaydet = $db->prepare('insert into urunler(gorsel1,gorsel2,gorsel3,gorsel4,urunadi,genislik,derinlik,yukseklik,aciklama,ozellikler,bazfiyat,stokkodu,kategori,stok,durum) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                $urunKaydet->execute(array($gorsel1, $gorsel2, $gorsel3, $gorsel4, $urunadi, $genislik, $derinlik, $yukseklik, $aciklama, $ozellikler, $bazfiyat, $stokkodu, $kategori, $stok, $durum));

                                if ($urunKaydet->rowCount()) {
                                    echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                                } else {
                                    echo '<div class="alert alert-danger">Hata Oluştu</div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Ürün Adı</th>
                        <th>Stok Kodu</th>
                        <th>Stok Adet</th>
                        <th>Ölçüler</th>
                        <th>Baz Fiyat</th>
                        <th>Top. Fiyat</th>
                        <th>Kategori</th>
                        <th>Durum</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $urunList = $db->prepare('select * from urunler order by id desc');
                    $urunList->execute();

                    if ($urunList->rowCount()) {
                        foreach ($urunList as $urunListSatir) {
                    ?>
                            <tr class="text-center">
                                <td><?php echo $urunListSatir['id']; ?></td>
                                <td><?php echo $urunListSatir['urunadi']; ?></td>
                                <td><?php echo $urunListSatir['stokkodu']; ?></td>
                                <td class="text-center"><?php echo $urunListSatir['stok']; ?></td>
                                <td><?php echo $urunListSatir['genislik'].'x'.$urunListSatir['derinlik'].'x'.$urunListSatir['yukseklik'] ; ?></td>
                                <td class="text-center"><?php echo $urunListSatir['bazfiyat']; ?>₺</td>
                                <td class="text-center"><?php echo $urunListSatir['bazfiyat']+$maliyetSatir['topmaliyet']; ?>₺</td>
                                <td><?php echo $urunListSatir['kategori']; ?></td>
                                <td><?php echo $urunListSatir['durum']; ?></td>
                                <td><i class="bi bi-pencil-square text-warning"></i></td>
                                <td><i class="bi bi-trash3-fill text-danger"></i></td>
                            </tr>
                    <?php
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Product List Section End -->


<?php require_once('footer.php'); ?>