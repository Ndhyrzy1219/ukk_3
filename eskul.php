<?php include 'layout/navbar.php'; ?>

<section>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <h4 class="mb-0 fw-bold text-center" style="color: #297dbe;">Ektrakurikuler</h4>
                    <p class="fw-bold text-center" style="color: #6ea4ceff;">SMKN 4 TASIKMALAYA</p>


                    <?php
                    $eskul = [
                        ['nama' => 'PKS', 'img' => 'img/pks.png'],
                        ['nama' => 'PLH', 'img' => 'img/plh.png'],
                        ['nama' => 'PASKIBRA', 'img' => 'img/paskibra.png'],
                        ['nama' => 'PRAMUKA', 'img' => 'img/pramuka.png'],
                    ];
                    ?>
                    <div class="row">
                        <?php foreach ($eskul as $e): ?>
                        <div class="col-3">
                            <div class="card p-4 m-2">
                                <img src="<?=$e['img']?>" alt="">
                                <div class="card border-0 ">
                                    <h5 class="text-center"><?=$e['nama']?></h5>
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


<?php include 'layout/footer.php'; ?>
