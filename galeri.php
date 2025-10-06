<?php include 'layout/navbar.php'; ?>

     
    <!-- SECTION GALERI -->
     <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="mb-0 mt-2 text-center" style="color : #75b6e7;">Galeri</h5>
                        <h4 class="text-center" style="color: rgba(33, 90, 147, 1);">SMKN 4 TASIKMALAYA</h4>

                            <!-- pencarian -->
                         <div class="container mt-4">
                             <div class="input-group mb-3">
                                 <input type="text" id="searchInput" class="form-control" placeholder="Cari galeri (contoh: 17, MPLS, MBG)">
                                    <button class="btn btn-primary" onclick="cariGaleri()">Cari</button>
                              </div>
                        </div>   

                    <!-- galeri 1 -->
                    <div id="galeri17" class="card shadow-lg rounded-2 mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>Upacara Peringatan HUT RI Ke-80</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $hut =[
                           "../img/hut1.JPG",
                           "../img/hut2.JPG",
                           "../img/hut3.JPG",
                           "../img/hut4.JPG",
                           "../img/hut5.JPG",
                           "../img/hut6.JPG"

                        ];
                        $i = 0;
                    ?>
                    <div class="row m-2">
                       <?php while ($i < count($hut)): ?>
                            <div class="col-lg-4 mt-2">
                                <div class="card">
                                    <img src="<?=$hut[$i]?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 1 -->

                    <!-- galeri 2 -->
                    <div id="galeriMpls" class="card shadow-lg rounded-2 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>MPLS 2025</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $mpls =[
                           "../img/mpls1.jpg",
                           "../img/mpls2.jpg",
                           "../img/mpls3.jpg",
                           "../img/mpls4.jpg",
                           "../img/mpls5.jpg",
                           "../img/mpls6.jpg"

                        ];
                       
                    ?>
                    <div class="row m-2">
                        <?php foreach ($mpls as $gambar): ?>
                        <div class="col-lg-4 mt-2">
                            <div class="card">
                                <img src="<?= $gambar ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 2 -->

                    <!-- galeri 3 -->
                    <div id="galeriMbg" class="card shadow-lg rounded-2 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>MBG</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $mbg =[
                           "../img/mbg1.jpg",
                           "../img/mbg2.jpg",
                           "../img/mbg3.jpg",
                           "../img/mbg4.jpg",
                           "../img/mbg5.jpg",
                           "../img/mbg6.jpg"

                        ];
                        $i = 0;
                    ?>
                    <div class="row m-2">
                        <?php while ($i < count($mbg)): ?>
                        <div class="col-lg-4 mt-2">
                            <div class="card">
                                <img src="<?=$mbg[$i]?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- Tutup galeri 3 -->

                </div>
            </div>
        </div>
     </section>
    <!-- TUTUP SECTION GALERI -->


    <!-- script yang memerintah untuk menscrol ke halaman -->
 <script>
function cariGaleri() {
  let input = document.getElementById("searchInput").value.toLowerCase();

  if (input.includes("17")) {
    document.getElementById("galeri17").scrollIntoView({ behavior: "smooth" }); 
   //document.getElementById("galeri17") → mengambil elemen dengan id galeri17 
   //.scrollIntoView({ behavior: "smooth" }) → otomatis scroll ke elemen tersebut dengan animasi halus.
  } else if (input.includes("mpls")) {
    document.getElementById("galeriMpls").scrollIntoView({ behavior: "smooth" });
  } else if (input.includes("mbg")) {
    document.getElementById("galeriMbg").scrollIntoView({ behavior: "smooth" });
  } else {
    alert("Galeri yang dicari tidak ditemukan!");
  }
}
</script>
<!-- tutup script -->

<?php include 'layout/footer.php'; ?>