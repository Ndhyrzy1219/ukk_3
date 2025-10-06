<?php include 'layout/navbar.php'; ?>

<?php
// Data kosentrasi keahlian
$konsentrasi = [
    [
        "nama" => "Teknik Komputer dan Jaringan (TKJ)",
        "gambar" => "../img/tkj.png",
        "deskripsi" => "Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi.
                        Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi server, dan troubleshooting perangkat jaringan."
    ],
    [
        "nama" => "Pengembangan Perangkat Lunak dan Gim (PPLG)",
        "gambar" => "../img/pplg.png",
        "deskripsi" => "Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim. 
                        Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan proyek teknologi."
    ],
    [
        "nama" => "Teknik Sepeda Motor (TSM)",
        "gambar" => "../img/tsm.png",
        "deskripsi" => "Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor, 
                        serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua."
    ],
    [
        "nama" => "Desain Komunikasi Visual (DKV)",
        "gambar" => "../img/dkv.png",
        "deskripsi" => "Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi, 
                        dan media komunikasi visual untuk berbagai kebutuhan industri kreatif."
    ],
    [
        "nama" => "Teknik Otomasi Industri (TOI)",
        "gambar" => "../img/toi.png",
        "deskripsi" => "Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan sistem 
                        kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur."
    ]
];
?>





    <!-- SECTION kosentrasi keahlian -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="mb-0 mt-4" style="color : #75b6e7;">Konsentrasi Keahlian</p>
                        <h3  style="color: rgba(33, 90, 147, 1);">SMKN 4 TASIKMALAYA</h3>

                     <?php foreach ($konsentrasi as $k) : ?>
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-lg-5  d-flex justify-content-center">
                                <div class="card border-0 m-3">
                                    <img src="<?= $k ['gambar'];?>" alt="" width="150" height="150" class="img-fluid ">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card border-0 m-4">
                                    <h5><?= $k ['nama'];?></h5>
                                    <p><?= $k ['deskripsi'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endforeach; ?>

                    
                </div>
            </div>
    </section>
    <!-- TUTUP SECTION kosentrasi keahlian -->


<?php include 'layout/footer.php'; ?>
