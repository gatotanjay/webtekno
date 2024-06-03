<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Travel With Gayatri Bali</h2>
                                        <p>Selamat datang di Gayatri and Travel, pintu gerbang menuju
                                            petualangan tak terlupakan di pulau dewata, Bali! Kami dengan bangga
                                            menawarkan layanan sewa mobil dan perjalanan yang memukau, dirancang untuk
                                            memenuhi setiap kebutuhan perjalanan Anda di pulau yang penuh keindahan ini.
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button scroll-to-section">
                                            <a
                                                href="https://wa.me/6287836272898?text=Hallo admin! Apa saja yang ditawarkan?"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-telephone-fill"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                </svg> Hubungi Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/gtravell.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>Kami Menyediakan!</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>Paket Tour</h4>
                        <p>Berbagai pilihan paket perjalanan yang kami rekomendasikan untuk anda!</p>
                        <div class="text-button">
                            <a href="/Tour">Selengkapnya<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>


</main><!-- End #main -->
<?= $this->endSection(); ?>