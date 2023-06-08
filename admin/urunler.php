<?php

require_once('header.php');

// $maliyet = $db->prepare('select * from maliyet');
// $maliyet->execute();
// $maliyetSatir = $maliyet->fetch();

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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ürün Adı</label>
                                        <input type="text" name="urunadi" placeholder="Ürün Adı Girin" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Genişlik</label>
                                        <input type="text" name="genislik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Derinlik</label>
                                        <input type="text" name="derinlik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Yükseklik</label>
                                        <input type="text" name="yukseklik" placeholder="Ör: 50cm" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Demir Profil</label>
                                        <select name="demirProfil" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php
                                            $demirprofilSec = $db->prepare('select * from profilekle where malTuru="Demir" order by ebat asc');
                                            $demirprofilSec->execute();
                                            if ($demirprofilSec->rowCount()) {
                                                foreach ($demirprofilSec as $demirprofilSecSatir) {
                                            ?>
                                                    <option value="<?php echo $demirprofilSecSatir['ebat']; ?>"><?php echo $demirprofilSecSatir['ebat']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kullanılan Demir Profil (cm)</label>
                                        <input type="text" name="kullanilanDemir" placeholder="Ör:170" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Alüminyum Profil</label>
                                        <select name="aluminyumProfil" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php
                                            $aluminyumProfilSec = $db->prepare('select * from profilekle where malTuru="Alüminyum" order by ebat asc');
                                            $aluminyumProfilSec->execute();
                                            if ($aluminyumProfilSec->rowCount()) {
                                                foreach ($aluminyumProfilSec as $aluminyumProfilSecSatir) {
                                            ?>
                                                    <option value="<?php echo $aluminyumProfilSecSatir['ebat']; ?>"><?php echo $aluminyumProfilSecSatir['ebat']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kullanılan Alüminyum Profil (cm)</label>
                                        <input type="text" name="kullanilanAluminyum" placeholder="Ör:170" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Paslanmaz Profil</label>
                                        <select name="paslanmazProfil" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php
                                            $paslanmazProfilSec = $db->prepare('select * from profilekle where malTuru="Paslanmaz" order by ebat asc');
                                            $paslanmazProfilSec->execute();
                                            if ($paslanmazProfilSec->rowCount()) {
                                                foreach ($paslanmazProfilSec as $paslanmazProfilSecSatir) {
                                            ?>
                                                    <option value="<?php echo $paslanmazProfilSecSatir['ebat']; ?>"><?php echo $paslanmazProfilSecSatir['ebat']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kullanılan Paslanmaz Profil (cm)</label>
                                        <input type="text" name="kullanilanPaslanmaz" placeholder="Ör:170" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Pirinç Profil</label>
                                        <select name="princProfil" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <?php
                                            $pirincProfilSec = $db->prepare('select * from profilekle where malTuru="Pirinç" order by ebat asc');
                                            $pirincProfilSec->execute();
                                            if ($pirincProfilSec->rowCount()) {
                                                foreach ($pirincProfilSec as $pirincProfilSecSatir) {
                                            ?>
                                                    <option value="<?php echo $pirincProfilSecSatir['ebat']; ?>"><?php echo $pirincProfilSecSatir['ebat']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kullanılan Prinç Profil (cm)</label>
                                        <input type="text" name="kullanilanPrinc" placeholder="Ör:170" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Boya Türü</label>
                                        <select name="boya" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Kaplama">Kaplama</option>
                                            <option value="Statik">Statik</option>
                                            <option value="Titanyum">Titanyum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kumaş Türü</label>
                                        <select name="kumas" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Deri">Deri</option>
                                            <option value="Kumaş">Kumaş</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ahşap Türü</label>
                                        <select name="ahsap" class="form-control">
                                            <option value="">Seçiniz</option>
                                            <option value="Ham Ağaç">Ham Ağaç</option>
                                            <option value="MDF">MDF</option>
                                            <option value="Sunta">Sunta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Ahşap Maliyeti</label>
                                        <input type="text" name="ahsapMaliyet" placeholder="Ör: 750" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>İşçilik Ücreti</label>
                                        <input type="text" name="iscilik" placeholder="Ör: 1500" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ek Maliyet</label>
                                        <input type="text" name="ekMaliyet" placeholder="Ör: 1500" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ek Maliyet Açıklama</label>
                                        <input type="text" name="ekAciklama" placeholder="Ek Maliyet Açıklaması Girin" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ürün Açıklaması</label>
                                        <textarea name="aciklama"></textarea>
                                        <script>
                                            CKEDITOR.replace('aciklama');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ürün Özellikleri</label>
                                        <textarea name="ozellikler"></textarea>
                                        <script>
                                            CKEDITOR.replace('ozellikler');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Ürün Kısa Açıklaması</label>
                                        <textarea name="kisaaciklama"></textarea>
                                        <script>
                                            CKEDITOR.replace('kisaaciklama');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Çarpan</label>
                                        <input type="text" name="bazfiyat" placeholder="Ör: 3" class="form-control">
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
                                    Güncel Maliyet: <?php // echo $maliyetSatir['topmaliyet']; 
                                                    ?> ₺
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
                            $demirProfil = $_POST['demirProfil'];
                            $kullanilanDemir = $_POST['kullanilanDemir'];
                            $aluminyumProfil = $_POST['aluminyumProfil'];
                            $kullanilanAluminyum = $_POST['kullanilanAluminyum'];
                            $paslanmazProfil = $_POST['paslanmazProfil'];
                            $kullanilanPaslanmaz = $_POST['kullanilanPaslanmaz'];
                            $princProfil = $_POST['princProfil'];
                            $kullanilanPrinc = $_POST['kullanilanPrinc'];
                            $boya = $_POST['boya'];
                            $kumas = $_POST['kumas'];
                            $ahsap = $_POST['ahsap'];
                            $ahsapMaliyet = $_POST['ahsapMaliyet'];
                            $iscilik = $_POST['iscilik'];
                            $ekMaliyet = $_POST['ekMaliyet'];
                            $ekAciklama = $_POST['ekAciklama'];
                            $genislik = $_POST['genislik'];
                            $derinlik = $_POST['derinlik'];
                            $yukseklik = $_POST['yukseklik'];
                            $aciklama = $_POST['aciklama'];
                            $ozellikler = $_POST['ozellikler'];
                            $kisaaciklama = $_POST['kisaaciklama'];
                            $bazfiyat = $_POST['bazfiyat'];
                            $stokkodu = $_POST['stokkodu'];
                            $kategori = $_POST['kategori'];
                            $stok = $_POST['stokadet'];
                            $durum = $_POST['durum'];

                            if (move_uploaded_file($_FILES['gorsel1']['tmp_name'], $gorsel1) || move_uploaded_file($_FILES['gorsel2']['tmp_name'], $gorsel2) || move_uploaded_file($_FILES['gorsel3']['tmp_name'], $gorsel3) || move_uploaded_file($_FILES['gorsel4']['tmp_name'], $gorsel4)) {

                                $urunKaydet = $db->prepare('insert into urunler(gorsel1,gorsel2,gorsel3,gorsel4,urunadi,demirProfil,kullanilanDemir,aluminyumProfil,kullanilanAluminyum,paslanmazProfil,kullanilanPaslanmaz,princProfil,kullanilanPrinc,boya,kumas,ahsap,ahsapMaliyet,iscilik,ekMaliyet,ekAciklama,genislik,derinlik,yukseklik,aciklama,ozellikler,kisaaciklama,bazfiyat,stokkodu,kategori,stok,durum) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                $urunKaydet->execute(array($gorsel1, $gorsel2, $gorsel3, $gorsel4, $urunadi, $demirProfil, $kullanilanDemir, $aluminyumProfil, $kullanilanAluminyum, $paslanmazProfil, $kullanilanPaslanmaz, $princProfil, $kullanilanPrinc, $boya, $kumas, $ahsap, $ahsapMaliyet, $iscilik, $ekMaliyet, $ekAciklama, $genislik, $derinlik, $yukseklik, $aciklama, $ozellikler, $kisaaciklama, $bazfiyat, $stokkodu, $kategori, $stok, $durum));

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
                        <th>Ürün Adı</th>
                        <th>Stok Kodu</th>
                        <th>Stok Adet</th>
                        <th>Ölçüler</th>
                        <th>Çarpan</th>
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
                                <td><?php echo $urunListSatir['urunadi']; ?></td>
                                <td><?php echo $urunListSatir['stokkodu']; ?></td>
                                <td class="text-center"><?php echo $urunListSatir['stok']; ?></td>
                                <td><?php echo $urunListSatir['genislik'] . 'x' . $urunListSatir['derinlik'] . 'x' . $urunListSatir['yukseklik']; ?></td>
                                <td class="text-center"><?php echo $urunListSatir['bazfiyat']; ?></td>

                                <!-- Maliyet Bulma Start -->
                                <?php

                                $profilMaliyet = $db->prepare('select * from profilekle where id=?');
                                $profilMaliyet->execute(array($urunListSatir['id']));
                                $profilMaliyetSatir = $profilMaliyet->fetch();

                                ?>
                                <!-- Maliyet Bulma End -->

                                <td class="text-center">
                                    <?php
                                    // echo $urunListSatir['bazfiyat'] + $profilMaliyetSatir['fiyat6m'];
                                    $aluminyumMaliyet = ($profilMaliyetSatir['fiyat6m']*$urunListSatir['kullanilanAluminyum'])/600;
                                    $demirMaliyet = ($profilMaliyetSatir['fiyat6m']*$urunListSatir['kullanilanDemir'])/600;
                                    $paslanmazMaliyet = ($profilMaliyetSatir['fiyat6m']*$urunListSatir['kullanilanPaslanmaz'])/600;
                                    $pirincMaliyet = ($profilMaliyetSatir['fiyat6m']*$urunListSatir['kullanilanPrinc'])/600;
                                    $topFiyat = $urunListSatir['bazfiyat']*(($aluminyumMaliyet)+($demirMaliyet)+($paslanmazMaliyet)+($pirincMaliyet)+$urunListSatir['ahsapMaliyet']+$urunListSatir['iscilik']+$urunListSatir['ekMaliyet']);
                                    echo ceil($topFiyat).' ₺';
                                    ?>
                                </td>
                                <td><?php echo $urunListSatir['kategori']; ?></td>
                                <td><?php echo $urunListSatir['durum']; ?></td>
                                <td><a href="urunguncelle.php?id=<?php echo $urunListSatir['id']; ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                                <td><a href="urunsil.php?id=<?php echo $urunListSatir['id']; ?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
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