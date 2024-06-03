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
                        <h4>Deskripsi Destinasi<em> Ubud 1</em> </h4>
                        <img src="\assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <img src="\assets/images/ubud1/alasharum.jpg" class="card-img-top" alt="Pura Ulun Danu" />
                        <div class="card-body">
                            <h5 class="card-title">Alas Harum (Coffe Luwak)</h5>
                            <p class="card-text">
                                Sebuah perpaduan unik antara wisata budaya dan petualangan, Alas Harum Bali adalah
                                destinasi serba ada yang bisa jadi alternatif paling unik di pulau ini. Terbentang di
                                antara perkebunan, yang dipadukan dengan olahraga ekstrim terbaik di Bali. Untuk kamu
                                yang tidak terlalu suka adventure, kamu dapat menyaksikan proses pembuatan kopi mulai
                                dari menanam, memanggang hingga meminum berbagai minuman panas di lantai atas, yang
                                merupakan kebun kopi khusus kopi Luwak
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <img src="\assets/images/ubud1/swingubud.png" class="card-img-top" alt="Handara Gate" />
                        <div class="card-body">
                            <h5 class="card-title">Swing Ubud</h5>
                            <p class="card-text">
                                Swing Ubud adalah sebuah atraksi wisata yang populer di Ubud, Bali, yang menawarkan
                                pengalaman berayun di atas ketinggian dengan pemandangan hutan tropis dan sawah
                                bertingkat yang indah. Pengunjung dapat menikmati sensasi melayang di udara sambil
                                menikmati keindahan alam Bali.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <img src="\assets/images/ubud1/puriubud.jpeg" class="card-img-top" alt="Handara Gate" />
                        <div class="card-body">
                            <h5 class="card-title">Puri Ubud</h5>
                            <p class="card-text">
                                Puri Ubud, yang secara resmi dikenal sebagai Puri Saren Agung, adalah sebuah kompleks
                                bangunan bersejarah yang terletak di Ubud, Kabupaten Gianyar, Bali, Indonesia. Kompleks
                                ini merupakan tempat tinggal resmi keluarga kerajaan Ubud. Istana ini memiliki sejarah
                                yang kaya dan merupakan pusat dari kekuatan spiritual dan budaya di daerah tersebut.
                                Selain itu, Puri Ubud juga menjadi destinasi wisata budaya yang populer di kalangan
                                wisatawan domestik maupun mancanegara karena arsitektur Bali yang masih sangat kental.
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