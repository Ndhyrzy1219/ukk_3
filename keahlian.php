<?php include 'layout/navbar.php'; ?>

<?php
// Data kosentrasi keahlian
$konsentrasi = [
    [
        "nama" => "Teknik Komputer dan Jaringan (TKJ)",
        "gambar" => "img/tkj.png",
        "deskripsi" => "Jurusan TKJ (Teknik Komputer dan Jaringan) adalah program di Sekolah Menengah Kejuruan (SMK) yang mempelajari tentang perakitan, pengoperasian, dan perbaikan komputer serta jaringan."
    ],
    [
        "nama" => "Pengembangan Perangkat Lunak dan Gim (PPLG)",
        "gambar" => "img/pplg.png",
        "deskripsi" => "Jurusan PPLG (Pengembangan Perangkat Lunak dan Gim) adalah program studi di SMK yang fokus pada pengembangan perangkat lunak dan game "
    ],
    [
        "nama" => "Teknik Sepeda Motor (TSM)",
        "gambar" => "img/tsm.png",
        "deskripsi" => "Jurusan TSM (Teknik Sepeda Motor) adalah program studi yang fokus pada pemeliharaan, perbaikan, dan modifikasi sepeda motor."
    ],
    [
        "nama" => "Desain Komunikasi Visual (DKV)",
        "gambar" => "img/dkv.png",
        "deskripsi" => "Jurusan DKV (Desain Komunikasi Visual) adalah program studi yang mempelajari cara menyampaikan pesan melalui elemen visual dan desain, dengan fokus pada kreativitas dan komunikasi efektif."
    ],
    [
        "nama" => "Teknik Otomasi Industri (TOI)",
        "gambar" => "img/toi.png",
        "deskripsi" => "Teknik Otomasi Industri adalah sebuah bidang teknik yang mempelajari tentang perakitan sistem-sistem di dunia industri yang berbasis otomatis."
    ]
];
?>





    <!-- SECTION kosentrasi keahlian -->
    <section>
        <div class="container p-3">
            <div class="row">
                <div class="col-lg-12 ">
                <h4 class="fw-bold text-center mb-0" style="color: #2068a0ff;">konsentrasi Keahlian</h4>
                <p class="fw-bold text-center" style="color: #6ea4ceff;">SMKN 4 TASIKMALAYA</p>

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

<!-- tutup section keahlian -->


<?php include 'layout/footer.php'; ?>
