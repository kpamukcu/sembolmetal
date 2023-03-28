<?php require_once('header.php'); ?>

<!-- About Settings Section Start -->
<section id="aboutSettings">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="lead">Slider Ayarları</h3>
            </div>
            <div class="col-md-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#slideGuncelle">
                    Slide Güncelle
                </button>

                <!-- Modal -->
                <div class="modal fade" id="slideGuncelle" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="slideGuncelle" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="slideGuncelle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Settings Start -->
        <div class="row mt-3">
            <div class="col-12">
                <form action="" method="post" class="form-row" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide1Baslik" placeholder="1. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide1Aciklama" placeholder="1. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>1. Slide Görsel</label>
                            <input type="file" name="slide1Gorsel">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide2Baslik" placeholder="2. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide2Aciklama" placeholder="2. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>2. Slide Görsel</label>
                            <input type="file" name="slide2Gorsel">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="slide3Baslik" placeholder="3. Slide Başlık" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="slide3Aciklama" placeholder="3. Slide Kısa Açıklama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>3. Slide Görsel</label>
                            <input type="file" name="slide3Gorsel">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" value="Kaydet" class="btn btn-success">
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
        <!-- Slider Settings End -->
    </div>
</section>
<!-- About Settings Section End -->


<?php require_once('footer.php'); ?>