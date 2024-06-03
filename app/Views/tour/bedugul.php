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
            <h4>Paket Ekonomis <em>Bali</em> 3 Hari 2Malam</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>IDR. 1.350.000 / pax</h5>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 1</h4>
                <p>Dijemput di airport Ngurah Rai Bali.</p>
                <p>Tour menuju Tanah Lot.</p>
                <p>Dilanjutkan bersantai di La Plancha Beach Club Seminyak.</p>
                <p>Check in hotel dan istirahat/acara bebas.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 2</h4>
                <p>Makan pagi di hotel, start dari hotel jam 08.30 wita.</p>
                <p>Tour menuju Desa Penglipuran.</p>
                <p>Dilanjutkan ke Kintamani.</p>
                <p>Makan siang sambil melihat indahnya pemandangan gunung dan danau Batur.</p>
                <p>Tour ke Tampak Siring/Tirta Empul.</p>
                <p>Menuju air terjun Tegenungan.</p>
                <p>Makan malam di Sanur area.</p>
                <p>Diantar ke hotel untuk istirahat/acara bebas.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="box-item">
                <h4>Hari 3</h4>
                <p>Makan pagi di hotel, check out hotel.</p>
                <p>Tour ke Pantai Kuta.</p>
                <p>Belanja oleh-oleh khas Bali di Krisna oleh-oleh</p>
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
  </div>

</main>
<?= $this->endSection(); ?>