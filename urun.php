<?php require_once('header.php') ?>

<!-- Product Section Start -->
<section id="productPage" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <img src="img/urun1.jpg" alt="" data-target="#carouselExampleIndicators" data-slide-to="0" class="active w-25">
                        <img src="img/urun2.jpg" alt="" data-target="#carouselExampleIndicators" data-slide-to="1" class="w-25 mx-2">
                        <img src="img/urun3.jpg" alt="" data-target="#carouselExampleIndicators" data-slide-to="2" class="w-25">


                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/urun1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/urun2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/urun3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>


            </div>
            <div class="col-md-6">
                <h1>Ürün Adı</h1>
                <span>XX ₺</span><br>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <form action="basket.php" method="get" class="form-row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" name="" id="" class="form-control" value="1" style="font-weight: 600;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="submit" value="Sepete Ekle" class="btn btn-outline-dark">
                        </div>
                    </div>
                    <div class="col-12">
                        <small>S.T.K: XX</small><br>
                        <small>Kategori: <a href="">Lorem Ipsum</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Product Description Start -->
<section id="description" class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Açıklama</button>
                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Özellikler</button>
                        <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Yorumlar</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis impedit quae, distinctio praesentium, rerum quos repudiandae deserunt voluptate aliquam debitis, optio illum aut laudantium? Porro architecto quae officia debitis molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nihil veniam reprehenderit laborum error sequi optio, dolore consectetur harum incidunt!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis impedit quae, distinctio praesentium, rerum quos repudiandae deserunt voluptate aliquam debitis, optio illum aut laudantium? Porro architecto quae officia debitis molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nihil veniam reprehenderit laborum error sequi optio, dolore consectetur harum incidunt!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis impedit quae, distinctio praesentium, rerum quos repudiandae deserunt voluptate aliquam debitis, optio illum aut laudantium? Porro architecto quae officia debitis molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nihil veniam reprehenderit laborum error sequi optio, dolore consectetur harum incidunt!</p>
                    </div>
                    <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul>
                            <li>Ürün Özelliği 1</li>
                            <li>Ürün Özelliği 2</li>
                            <li>Ürün Özelliği 3</li>
                            <li>Ürün Özelliği 4</li>
                            <li>Ürün Özelliği 5</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade pt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Ürün Yorumları Gelecek</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Description End -->

<!-- Related Products Section Start -->
<section id="related" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>İlgili Ürünler</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php">Ürün Adı</a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php">Ürün Adı</a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php">Ürün Adı</a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                    <a href="urun.php"><img src="img/demo1.webp" alt="" class="img-fluid"></a>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-9 px-0">
                                <h2><a href="urun.php">Ürün Adı</a></h2>
                                <small><a href="kategori.php">Kategori Adı</a></small>
                            </div>
                            <div class="col-3 text-right px-0">
                                XX ₺
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Products Section End -->

<?php require_once('footer.php') ?>