<?php require_once('header.php') ?>
<!-- Blog Banner Section Start -->
<section id="blogBanner" class="py-11" style="background-color: #e7e1d8;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Blog</h1>
            </div>
        </div>
    </div>
</section>
<!-- Blog Banner Section End -->
<!-- Blog Section Start -->
<section id="blog" class="py-5">
    <div class="container">
        <div class="row">
            <!-- Blog List Start -->
            <div class="col-md-9">

                <?php
                $blogList = $db->prepare('select * from makale order by id desc');
                $blogList->execute();

                if ($blogList->rowCount()) {
                    foreach ($blogList as $blogListSatir) {
                ?>
                        <div class="row">
                            <div class="col-12">
                                <img src="<?php echo substr($blogListSatir['gorsel'],3); ?>" class="img-fluid" alt="<?php echo $blogListSatir['altEtiketi']; ?>">
                                <h2 class="py-3 text-center"><?php echo $blogListSatir['baslik']; ?></h2>
                                <hr>
                                <small>Yayın Tarihi:<?php echo $blogListSatir['tarih']; ?></small>
                                <p class="text-justify"><?php echo substr($blogListSatir['icerik'],0,418); ?></p>
                                <a href="makale.php?id=<?php echo $blogListSatir['id']; ?>">Devamını Oku -></a>
                                <hr>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <!-- Blog List End -->

            <!-- Aside Start -->
            <div class="col-md-3">
                <img src="img/makalemain1-285x177.webp" alt="">
                <h5 class="pt-5">Popüler Yazılar</h5>
                <hr>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eveniet? Velit illum minima ex consequatur.</p>
                <h5 class="pt-5">Sizin İçin Seçtiklerimiz</h5>
                <hr>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/dresuar-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/sehpe-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="img/masa-100x100.webp" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <h5>Kategoriler</h5>
                <hr>
                <a href="">Dresuar</a><br>
                <a href="">Sandalyeler</a><br>
                <a href="">Koltuklar</a><br>
                <a href="">Büfe ve Kitaplık</a><br>
                <a href="">Sehpalar</a><br>
                <a href="">Masalar</a><br>
                <a href="">Bar Sandalyeleri</a>
            </div>
            <!-- Aside End -->
        </div>
    </div>
</section>
<!-- Blog Section End -->
<?php require_once('footer.php') ?>