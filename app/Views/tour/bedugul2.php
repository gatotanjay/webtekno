<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<main id="main" class="main">
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

    <div id="about" class="about-us section">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Paket Wisata <em>Bali</em> + <em>Nusa Penida</em> 3 Hari 2 Malam</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>IDR. 1.600.000 / pax</h5>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 1</h4>
                <p>Dijemput di airport Ngurah Rai Bali.</p>
                <p>Tour ke Pantai Pandawa</p>
                <p>Menuju Pantai Melasti.</p>
                <p>Melihat sunset di La Planca Beach Club Seminyak.</p>
                <p>Check in hotel dan beristirahat.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 2</h4>
                <p>Makan pagi di hotel, tour start dari hotel jam 07.30 wita</p>
                <p>Menuju Pantai Sanur untuk penyebrangan ke Nusa Penida</p>
                <p>Trip Pantai Crystal Bay, Angel Billabong, Broken Beach, Pantai Kelingking.</p>
                <p>Makan siang di restaurant setempat.</p>
                <p>Jam 16.00 menuju pelabuhan untuk kembali ke Sanur.</p>
                <p>Tiba di sanur makan malam di Dwika restaurant.</p>
                <p>Diantar ke hotel untuk istirahat.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 3</h4>
                <p>Makan pagi di hotel, dilanjutkan check out hotel dan tour menuju:</p>
                <p>Tanjung Benoa, pusat rekreasi water sport (include banana boat 1x putaran)</p>
                <p>Shopping di seputaran Kuta, krisna, Joger, agung Bali.</p>
                <p>Makan siang di seputar Kuta area.</p>
                <p>Diantar kembali ke airport.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="box-item">
                <h4><a href="#">Fasilitas</a></h4>
                <p>2 malam menginap di hotel Swiss BelExpress Legian Kuta </p>
                <p>Tiket masuk objek wisata, sesuai program.</p>
                <p>2x makan pagi, 1x makan siang dan 1x makan malam.</p>
                <p>Sopir merangkap pemandu wisata.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="gradient-button">
                <a href="https://wa.me/6287836272898?text=">BookNow</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
      </div>
    </div>

</main>
<?= $this->endSection(); ?>