<?php
$slider = $db->prepare('select * from slider order by id desc limit 1');
$slider->execute();
$sliderSatir = $slider->fetch();
?>

<!-- Slider Section Start -->
<section id="slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol> -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo substr($sliderSatir['slide1Gorsel'],3); ?>" class="d-block w-100" alt="Sembol Metal">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $sliderSatir['slide1Baslik']; ?></h5>
                                <p><?php echo $sliderSatir['slide1Aciklama']; ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo substr($sliderSatir['slide2Gorsel'],3); ?>" class="d-block w-100" alt="Sembol Metal">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $sliderSatir['slide2Baslik']; ?></h5>
                                <p><?php echo $sliderSatir['slide2Aciklama']; ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo substr($sliderSatir['slide3Gorsel'],3); ?>" class="d-block w-100" alt="Sembol Metal">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $sliderSatir['slide3Baslik']; ?></h5>
                                <p><?php echo $sliderSatir['slide3Aciklama']; ?></p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Section Start -->