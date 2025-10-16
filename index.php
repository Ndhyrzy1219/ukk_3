<?php include 'layout/functions.php'; ?>
<?php include 'layout/navbar.php'; ?>

<!-- section selamat datang -->
 <section class="banner">
    <div class="container-fluid p-0 m-0">
        <img src="img/fguru.png" alt="foto guru" class="img-fluid">
    </div>
 </section>
 <!-- tutup section selamat datang -->

 <section>
    <div class="container-fluid p-5 " style="background-color: #297dbe;">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="mb-0" style="color: cornflowerblue;">Lokasi </h5>
                <h2 style="color: blue;">SMKN 4 TASIKMALAYA</h2>
                <p class="text-white">Jl. Depok, Sukamenak, Kec. Purbaratu, Kab. Tasikmalaya, Jawa Barat 46196</p>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2131636317513!2d108.25189907357232!3d-7.329939972086937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1759284085158!5m2!1sid!2sid" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- section berita -->
<section>
  <div class="container">
    <div class="row py-4">
      <div class="col-12">
        <div class="card border-0 bg-white">
          <h5 class="mb-0 fw-bold text-center" style="color: #297dbe;">Berita</h5>
          <p class="text-center fw-bold" style="color: #75b6e7;">SMKN 4 TASIKMALAYA</p>

          <div class="row g-4"><!-- g-4 untuk jarak antar card -->
            
            <!-- Berita 1 -->
            <div class="col-md-6 d-flex">
              <div class="card p-3 border-0 text-white h-100 w-100" style="background-color: #297dbe;">
                <img src="img/berita 1.jpg" alt="berita" class="img-fluid rounded mb-3">
                <div class="card-body p-0 d-flex flex-column justify-content-between">
                  <p class="fw-bold mb-3">
                    SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja
                  </p>
                  <a href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/"
                     class="btn btn-sm text-white py-2 px-4 w-100"
                     style="background-color: #75b6e7;">Selengkapnya</a>
                </div>
              </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-6 d-flex">
              <div class="card p-3 border-0 text-white h-100 w-100" style="background-color: #297dbe;">
                <img src="img/berita2.jpeg" alt="berita" class="img-fluid rounded mb-3">
                <div class="card-body p-0 d-flex flex-column justify-content-between">
                  <p class="fw-bold mb-3">
                    SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja
                  </p>
                  <a href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/"
                     class="btn btn-sm text-white py-2 px-4 w-100"
                     style="background-color: #75b6e7;">Selengkapnya</a>
                </div>
              </div>
            </div>

          </div><!-- end row -->
        </div>
      </div>
    </div>
  </div>
</section>



 <!-- section galeri -->
<section style="background-color: #ddf3fdff;"> <!-- warna lembut -->
  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        <div class="card border-0 bg-transparent">
          <h5 class="mb-0 fw-bold text-center" style="color: #297dbe;">Galeri</h5>
          <p class="text-center fw-bold" style="color: #75b6e7;">SMKN 4 TASIKMALAYA</p>

          <?php 
          $img = [
              'img/mpls5.jpg',
              'img/mpls6.jpg',
              'img/mbg2.jpg',
              'img/mbg3.jpg'
          ];
          ?>
          <div class="row g-4 mt-3">
            <?php foreach ($img as $i): ?>
              <div class="col-6 col-md-3 d-flex">
                <div class="card shadow-sm border-0 w-100 h-100">
                  <img src="<?= $i ?>" alt="foto" class="img-fluid rounded">
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

 <!-- tutup section galeri -->


 <!-- section statistik -->
<section class="py-5">
    <div class="container">
        <div class="card shadow-lg border-0 rounded-4" style="background-color: #75b6e7;">
            <div class="row text-center text-white p-4">
          <h5 class="mb-0 fw-bold text-center" style="color: #f3f6f8ff;">Galeri</h5>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card border-0 bg-transparent text-white">
                        <h2 class="fw-bold mb-0"><?= $data['siswa']; ?></h2>
                        <p class="mb-0">Siswa</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card border-0 bg-transparent text-white">
                        <h2 class="fw-bold mb-0"><?= $data['pendidik']; ?></h2>
                        <p class="mb-0">Pendidik</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card border-0 bg-transparent text-white">
                        <h2 class="fw-bold mb-0"><?= $data['keahlian']; ?></h2>
                        <p class="mb-0">Keahlian</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="card border-0 bg-transparent text-white">
                        <h2 class="fw-bold mb-0"><?= $data['rombel']; ?></h2>
                        <p class="mb-0">Rombel</p>
                    </div>
                </div>

                

             <?php
                if ($data['siswa'] > 1000) {
                    echo '<p class="text-center fw-bold mb-4">Sekolah ini memiliki banyak siswa</p>';
                } else {
                    echo '<p class="text-center fw-bold mb-4">Sekolah ini tidak memiliki banyak siswa</p>';
                }
                ?>
                
            </div>
        </div>
    </div>
</section>
<!-- tutup section statistik -->


<?php include 'layout/footer.php'; ?>


