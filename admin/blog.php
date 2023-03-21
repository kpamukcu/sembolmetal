<?php require_once('header.php'); ?>

<!-- Makale Section Start -->
<section id="makale">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="lead">Blog Yazıları</h3>
            </div>
            <div class="col-md-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Yeni Yazı Ekle
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yazı Ekle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form form-row" enctype="multipart/form-data">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="baslik" placeholder="Yazı Başlığını Girin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="icerik" class="form-control"></textarea>
                                            <script>
                                                CKEDITOR.replace('icerik');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="meta" placeholder="Seo Açıklaması Girin (Max.160 Karakter)" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-auto">
                                        <div class="form-group">
                                            <input type="file" name="gorsel">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="altEtiketi" placeholder="Görsel Açıklama Metni Girin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="date" name="tarih" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="submit" value="Kaydet" class="btn btn-success w-100" name="blogKaydet">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Makale Section End -->

<?php

if(isset($_POST['blogKaydet'])){
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
    $meta = $_POST['meta'];
    $gorsel = '../img/'.$_FILES['gorsel']['name'];
    $altEtiketi = $_POST['altEtiketi'];
    $tarih = $_POST['tarih'];

    if(move_uploaded_file($_FILES['gorsel']['tmp_name'],$gorsel)){
        $blogKaydet = $db-> prepare('insert into makale(baslik,icerik,meta,gorsel,altEtiketi,tarih) values(?,?,?,?,?,?)');
        $$blogKaydet -> execute(array($baslik,$icerik,$meta,$gorsel,$altEtiketi,$tarih));
    }
}

?>


<?php require_once('footer.php'); ?>