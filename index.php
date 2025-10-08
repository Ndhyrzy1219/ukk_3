<?php include 'layout/functions.php'; ?>
<?php include 'layout/navbar.php'; ?>

<!-- section selamat datang -->
 <section class="banner">
    <div class="container-fluid p-0 m-0">
        <img src="img/fguru.png" alt="foto guru" class="img-fluid">
    </div>
 </section>
 <!-- tutup section selamat datang -->

 <!-- section berita -->
  <section>
    <div class="container">
        <div class="row py-4">
            <div class="col-12">
                <div class="card border-0">
                    <h5 class="mb-0 fw-bold" style="color: #297dbe;">Berita</h5>
                    <h4 style="color: #75b6e7;">SMKN 4 TASIKMALAYA</h4>

                    <div class="row">
                        <div class="col-6">
                            <div class="card p-3">
                                <img src="img/berita 1.jpg" alt="berita" class="img-fluid">
                                <div class="card border-0">
                                    <h5 class="fw-bold" style="color: #297dbe;">SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja</h5>
                                    <a href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/" 
                                    class="btn btn-sm text-white py-2" style="background-color: #75b6e7;">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-3">
                                <img src="img/berita2.jpeg" alt="berita" class="img-fluid">
                                <div class="card border-0">
                                    <h5 class="fw-bold" style="color: #297dbe;">SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja</h5>
                                    <a href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/" 
                                    class="btn btn-sm text-white py-2" style="background-color: #75b6e7;">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
 <!-- tutup section berita -->


 <!-- section galeri -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <h5 class="mb-0 fw-bold text-center" style="color: #297dbe;">Galeri</h5>
                    <p class=" text-center fw-bold" style="color: #75b6e7;">SMKN 4 TASIKMALAYA</p>


                    <?php 
                    $img = [
                        'img/mpls5.jpg',
                        'img/mpls6.jpg',
                        'img/mbg2.jpg',
                        'img/mbg3.jpg'
                    ];
                    ?>
                    <div class="row">
                        <?php foreach ($img as $i): ?>
                        <div class="col-3">
                            <div class="card">
                                <img src="<?=$i?>" alt="foto">
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

            </div>
        </div>
    </div>
</section>
<!-- tutup section statistik -->


<?php include 'layout/footer.php'; ?>


