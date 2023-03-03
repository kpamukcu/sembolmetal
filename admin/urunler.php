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
                                        <textarea name="aciklama" rows="7" class="form-control"></textarea>
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
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
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
            </table>
        </div>
    </div>
</section>
<!-- Product List Section End -->


<?php require_once('footer.php'); ?>