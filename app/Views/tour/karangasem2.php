<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <br><br><br>
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



    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown header-text" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <h4>Deskripsi Destinasi<em> Karangasem 2</em> </h4>
                        <img src="\assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <img src="\assets/images/karangasem1/lempuyang.avif" class="card-img-top" alt="Lempuyang" />
                        <div class="card-body">
                            <h5 class="card-title">Lempuyang</h5>
                            <p class="card-text">
                                Pura Lempuyang, juga dikenal sebagai “Gerbang Surga Bali,” adalah kompleks pura Hindu
                                yang terletak di lereng Gunung Lempuyang. Pura ini terdiri dari serangkaian tujuh pura
                                yang memukau, dan dikenal dengan gerbang khasnya yang membingkai Gunung Agung di
                                kejauhan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Free Request</h5>
                            <p class="card-text">
                                Pilih destinasi wisata sesuai dengan keinginan anda
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
<?= $this->endSection(); ?>