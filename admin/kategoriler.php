<?php require_once('header.php'); ?>

<section id="kategoriler" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Kategori Ekle</h5>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="katadi" placeholder="Kategori Adı Girin" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="katturu" class="form-control">
                            <option value="">Kategori Türü Seçin</option>
                            <option value="Ana Kategori">Ana Kategori</option>
                            <option value="Alt Kategori">Alt Kategori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ustkatturu" class="form-control">
                            <option value="">Üst Kategorisini Seçin</option>
                            <option value="">VT'den Gelecek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="kataciklama" placeholder="Max. 160 Karakter Kategori Açıklaması Girin." rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gorsel">Kategori Görseli Seçin</label><br>
                        <input type="file" name="gorsel" id="gorsel">
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
                        $katkaydet = $db->prepare('insert into kategoriler(katadi,katturu,ustkatturu,kataciklama,gorsel) values(?,?,?,?,?)');
                        $katkaydet->execute(array($katadi, $katturu, $ustkatturu, $kataciklama, $gorsel));

                        if ($katkaydet->rowCount()) {
                            echo '<div class="alert alert-success">Kayıt Başarılı</div>';
                        } else {
                            echo '<div class="alert alert-danger">Hata Oluştu</div>';
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
                            <th>Düzenle</th>
                            <th>Sil</th>
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
                                    <td><img src="<?php echo $katlistSatir['id']; ?>"></td>
                                    <td><?php echo $katlistSatir['katadi']; ?></td>
                                    <td><?php echo $katlistSatir['katturu']; ?></td>
                                    <td><?php echo $katlistSatir['ustkatturu']; ?></td>
                                    <td><?php echo $katlistSatir['kataciklama']; ?></td>
                                    <td class="text-center"><a href="kategoriduzenle.php"><i class="bi bi-pencil-square text-warning"></i></a></td>
                                    <td class="text-center"><a href="kategorisil.php" class="text-danger"><i class="bi bi-trash3-fill text-danger"></i></a></td>
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