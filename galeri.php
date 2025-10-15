<?php include 'layout/navbar.php'; ?>

     
    <!-- SECTION GALERI -->
<section>
    <div class="container p-3">
    <div class="row">
        <div class="col-12">
            <h4 class="mb-0 fw-bold text-center" style="color: #297dbe;">Galeri</h4>
            <p class="fw-bold text-center" style="color: #6ea4ceff;">SMKN 4 TASIKMALAYA</p>

            <div class="row m-4">
                <div class="col-12">
                    <div  class="card border-0 shadow-lg">
                       <h5 class="mt-3 text-center" style="color: #75b6e7;">HUT RI</h5>
                       <?php
                       $hut = [
                        'img/mbg.jpg',
                        'img/mbg4.jpg',
                        'img/mbg5.jpg',
                        'img/mbg6.jpg'
                       ];
                       ?>
                       <div class="row p-4">
                        <?php foreach ($hut as $h): ?>
                        <div class="col-3">
                            <div class="card border-0">
                                <img src="<?=$h?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <?php endforeach; ?>
                       </div> 
                    </div>
                </div>
            </div>

            <div class="row m-4">
                <div class="col-12 mt-2">
                    <div  class="card border-0 shadow-lg">
                       <h5 class="mt-3 text-center" style="color: #75b6e7;">MBG</h5>
                       <?php
                       $mbg = [
                        'img/mbg.jpg',
                        'img/mbg4.jpg',
                        'img/mbg5.jpg',
                        'img/mbg6.jpg'
                       ];
                       ?>
                       <div class="row p-4">
                        <?php foreach ($mbg as $m): ?>
                        <div class="col-3">
                            <div class="card border-0">
                                <img src="<?=$m?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <?php endforeach; ?>
                       </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

    <!-- TUTUP SECTION GALERI -->




<?php include 'layout/footer.php'; ?>