<?php
include 'layout/functions.php';
$data = getStatistikSekolah();
$grafik = getDataSiswaPerTahun();
?>
<?php include 'layout/navbar.php'; ?>

<!-- section selamat datang -->
 <section class="banner">
    <div class="container-fluid p-0 m-0">
        <img src="img/fguru.png" alt="foto guru" class="img-fluid">
    </div>
 </section>
 <!-- tutup section selamat datang -->

 <!-- section lokasi smk -->
  <div class="container-fluid p-4" style="background-color: #297dbe;">
    <div class="row m-3">

        <div class="col-lg-6">
            <div class="card border-0" style="background-color: #297dbe;">
                <h3 class="mb-0 fw-bold" style="color: blue;">Lokasi</h3>
                <h1 class="fw-bold" style="color: cornflowerblue;"> SMKN 4 TASIKMALAYA</h1>
                <hr class="border border-primary border-2 opacity-100 w-25">
                <p class="mt-4 text-white">Jl. Depok, Sukamenak, Kec. Purbaratu, Kab. Tasikmalaya, Jawa Barat 46196</p>
            </div>
        </div>

        <div class="col-lg-5 ">
            <div class="card border-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2131636317417!2d108.25189907357232!3d-7.329939972086937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1758082932817!5m2!1sid!2sid" 
                  width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
  </div>
  <!-- tutup section lokasi -->

  <!-- sambutan -->
   <section>
    <div class="container p-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0">
                    <h5 class="text-center text-primary">Sambutan Kepala Sekolah</h5>

                    <div class="row mt-2">
                        <div class="col-lg-5 d-flex justify-content-center align-items-center">
                            <div class="card border-0">
                                <img src="img/kepalasekolah.png" alt="foto kepala sekolah" class="img-fluid " style="background-color: #75b6e7; width: 300px; height: 300px; border-top-left-radius: 50px; border-top-right-radius: 50px; border-bottom-left-radius: 0; border-bottom-right-radius: 0; object-fit: cover;" width="300" height="300">
                                <h5 style="background-color: #75b6e7;" class="text-center text-white">Pak Kurniawan Spd</h5>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="card border-2 p-3">
                                <p>Assalamu’alaikum warahmatullahi wabarakatuh, </p>
                                    <p>Selamat datang di SMKN 4 Tasikmalaya. Segala puji dan syukur kita panjatkan kehadirat Allah
                                        SWT,
                                        semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat
                                        menghadirkan website SMK Negeri 4 Tasikmalaya ini.</p>
                                    <p>Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat
                                        mengenal lebih jauh tentang sekolah kami
                                        sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan
                                        kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan,
                                        masih banyak kekurangan yang harus kami perbaiki.
                                        Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan. </p>
                                    <p> Di sini, kami tidak hanya mengajarkan ilmu pengetahuan tetapi juga membentuk karakter siswa
                                        agar siap menghadapi tantangan masa depan.
                                        Kami berharap website ini dapat memberikan informasi yang bermanfaat dan memberi gambaran
                                        yang jelas tentang segala aktivitas di sekolah.</p>
                                    <p>Terima kasih atas kunjungan Anda. Semoga sekolah kami selalu menjadi tempat yang penuh
                                        inspirasi bagi anak-anak bangsa.
                                        Wassalamu’alaikum warahmatullahi wabarakatuh</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- tutup sambutan -->

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

<!-- Section Grafik -->
<section class="my-5">
    <div class="container">
        <div class="card shadow-lg p-4">
            <h5 class="text-center fw-bold mb-4" style="color:#297dbe;">Grafik Jumlah Siswa per Tahun</h5>
            <canvas id="grafikSiswa"></canvas>
        </div>
    </div>
</section>



<!-- Script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('grafikSiswa');

new Chart(ctx, {
    type: 'bar', // Bisa 'line', 'bar', 'pie', dll
    data: {
        labels: <?= json_encode($grafik['labels']); ?>,
        datasets: [{
            label: 'Jumlah Siswa',
            data: <?= json_encode($grafik['data']); ?>,
            backgroundColor: 'rgba(41, 125, 190, 0.6)',
            borderColor: 'rgba(41, 125, 190, 1)',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>




<?php include 'layout/footer.php'; ?>


