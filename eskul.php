<?php include 'layout/navbar.php'; ?>

                <?php 
            // Data ekskul
            $eskul = [
                ["img" => "../img/paskibra.png", "nama" => "PASKIBRA"],
                ["img" => "../img/pramuka.png", "nama" => "PRAMUKA"],
                ["img" => "../img/pmr.png", "nama" => "PMR"],
                ["img" => "../img/plh.png", "nama" => "PLH"],
                ["img" => "../img/pd.jpg", "nama" => "PERISAI DIRI"],
                ["img" => "../img/pks.png", "nama" => "PKS"],
            ];

            
            ?>

    <!-- SECTION ESKUL -->
    <section>
        <div class="container px-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h5 class="mb-0" style="color : #75b6e7;">Ekstrakurikuler</h5>
                        <h4  style="color: rgba(33, 90, 147, 1);">SMKN 4 TASIKMALAYA</h4>
                        <div class="row">
                            <?php foreach ($eskul as $item): ?>
                        <div class="col-lg-4">
                            <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                <img src="<?= $item ['img']?>" alt="" width="150" height="150">
                                <div class="card-body text-center border-0">
                                    <h4><?= $item ['nama'] ?></h4>
                                </div>
                            </div>
                        </div> 
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP SECTION ESKUL -->


<?php include 'layout/footer.php'; ?>
