<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<br><br><br><br>
<div id="carouselExample" class="carousel slide mt-6 ">
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <video class="img-fluid" autoplay loop muted>
                <source src="\assets/video/handaragate.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="\assets/video/puriubud.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="carousel-item">
            <video class="img-fluid" autoplay loop muted>
                <source src="\assets/video/ulundanu.mp4" type="video/mp4" />
            </video>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>




<!-- bawahan -->
<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 header-text">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Gallery Bersama <em>Gayatri </em></h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="\assets/images/gallery/gallery1.jpg" alt class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water" />

                <img src="\assets/images/gallery/gallery2.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape" />

                <img src="\assets/images/gallery/gallery7.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="\assets/images/gallery/gallery3.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds" />

                <img src="\assets/images/gallery/gallery4.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water" />

            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="\assets/images/gallery/gallery5.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea" />

                <img src="\assets/images/gallery/gallery6.jpg" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park" />

            </div>


        </div>
        <!-- Gallery -->
    </div>
</div>

</main><!-- End #main -->
<?= $this->endSection(); ?>