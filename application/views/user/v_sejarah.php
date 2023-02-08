<div class="features">
<?php
foreach ($sejarah as $key => $value) {

?>
    <div class="container">
        <center>
            <br><br><br>
            <h1 class="section_title">SEJARAH</h1>
            <h2 class="style5" style="border-top: 5px solid #08347c; width:100px;"></h2>
        </center>
        <div class="row text-justify">
            <div class="col-lg-4">
                <br><br><br>
                <div class="section_title_container text-justify">
                    <div class="section_subtitle">
                        <div class="card" style="width: 22rem;">
                            <img src="<?= base_url('foto_sejarah/' . $value->foto_sejarah) ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <br><br>
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-body">
                        <div class="card-body">
                            <p class="fs-6"><?= $value->desc1 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
            <div class="card-body text-justify">
                <div class="card-body">
                    <p class="card-text fs-6"><?= $value->desc2 ?></p>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>
</div>