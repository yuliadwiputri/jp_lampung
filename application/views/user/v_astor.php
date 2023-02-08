<div class="features">
    <?php
    foreach ($jpAstor as $key => $value) {
    ?>
        <div class="container">
            <center>
                <br><br><br>
                <h1 class="section_title"><?= $value->judul ?></h1>
                <h2 class="section_title"><?= $value->subjudul ?></h2>
                <hr class="style5" style="border-top: 5px solid #08347c" width="100px">
            </center>
            <br>
            <div class="row">
                <div class="col-lg-5">
                    <br>
                    <div class="section_title_container text-justify">
                        <div class="section_subtitle">
                            <div class="card" style="width: 27rem;">
                                <img src="<?= base_url('foto_jpAstor/' . $value->foto_jpAstor) ?>" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <br><br>
                    <div class="card border mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 100%;">
                        <div class="card-body">
                            <div class="card-body text-justify">
                                <p class="card-text fs-6"><?= $value->desc1 ?></p>
                                <p class="fs-6"><?= $value->desc2 ?></p><br>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary fs-6" type="button">Daftar Asuransi Motor</button>
                                    <button class="btn btn-primary fs-6" type="button">Daftar Asuransi Mobi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6  text-justify">
                        <br><br>
                        <div class="card border mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 100%;">
                            <div class="card-header">
                                <h2><b>Ruang Lingkup Pertanggungan</b></h2>
                            </div>
                            <div class="card-body">
                                <div class="card-body"><?= $value->lingkup ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <br>
                        <div class="section_title_container text-justify">
                            <div class="section_subtitle">
                                <div class="card" style="width: 30rem;">
                                    <img src="<?= base_url('template\img\jp_astor2.png') ?>" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion -->
            <hr class="style5" style="border-top: 2px solid #08347c">
            <br>
            <div class="feature">
                <div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">JAMINAN</h2>
                            </div>
                        </div><br><br>
                    </div>
                    <div class="row feature_row">

                        <!-- Feature Content -->
                        <div class="col-lg-15 feature_col">
                            <div class="feature_content">
                                <!-- Accordions -->
                                <div class="accordions  text-justify">
                                    <div class="elements_accordions">
                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center active">
                                                <div>RESIKO-RESIKO YANG DIJAMIN</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <?= $value->jaminan ?> </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>RESIKO-RESIKO YANG TIDAK DIJAMIN</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <?= $value->tidak_jaminan ?> </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>JENIS JAMINAN TAMBAHAN</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <?= $value->jenis ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordions End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kelengkapan Berkas -->
            <div class="container">
                <br><br><br>
                <hr class="style5" style="border-top: 2px solid #08347c">
                <br>
                <div class="section_title_container text-center">
                    <h2 class="section_title">Kelengkapan Berkas Klaim</h2><br><br><br><br>
                </div>
                <div class="row text-justify">
                    <div class="col-lg-4">
                        <div class="cardShadow">
                            <div class="card shadow p-3 mb-2 bg-white rounded" style="width: 20rem;">
                                <h7 class="card-header bg-info text-light border-info fs-6"><b>1. Partial Loss</b></h7>
                                <div class="card-body">

                                    <?= $value->berkas1 ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cardShadow">
                            <div class="card shadow p-3 mb-2 bg-white rounded" style="width: 20rem;">
                                <h7 class="card-header bg-info text-light border-info fs-6"><b>2. Total Loss</b></h7>
                                <div class="card-body">

                                    <?= $value->berkas2 ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cardShadow">
                            <div class="card shadow p-3 mb-2 bg-white rounded" style="width: 20rem;">
                                <h7 class="card-header bg-info text-light border-info fs-6"><b>3. Tuntutan yang melibatkan Pihak III (TJH III), harus disertai:</b></h7>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?= $value->berkas3 ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->