    <div class="features">
        <?php
        foreach ($jpGraha as $key => $value) {

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
                                    <img src="<?= base_url('foto_jpGraha/' . $value->foto_jpGraha) ?>" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <br><br>
                        <div class="card border mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 100%;">
                            <div class="card-body">
                                <div class="card-body text-justify">
                                    <p class="card-text fs-6"><?= $value->desc2 ?></p>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary fs-6" type="button">Daftar</button>
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
                                    <h2><b>Ruang Lingkup JP-GRAHA</b></h2>
                                </div>
                                <div class="card-body fs-6 text-dark">
                                    <?= $value->lingkup ?> </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <h4 class="card-title">BANGUNAN YANG DAPAT DIASURANSIKAN</h4>
                                        <p class=" fs-6"> <?= $value->bangunan ?></p>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">HARTA BENDA YANG DAPAT DIASURANSIKAN</h4>
                                        <p class=" fs-6"> <?= $value->harta ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <div class="section_title_container text-justify">
                                <div class="section_subtitle">
                                    <div class="card" style="width: 30rem;">
                                        <img src="<?= base_url('template\img\graha.png') ?>" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion (Jaminan Tambahan) -->
                <hr class="style5" style="border-top: 2px solid #08347c">
                <br>
                <div class="feature">
                    <div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title_container text-center">
                                    <h2 class="section_title">JAMINAN TAMBAHAN</h2>
                                </div>
                            </div>
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
                                                    <div>Jaminan Resiko Banjir</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <p> <?= $value->jaminan1 ?></p>
                                                </div>
                                            </div>

                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Jaminan Resiko Teroris dan Sabotase</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <p> <?= $value->jaminan2 ?></p>
                                                </div>
                                            </div>

                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Jaminan Resiko Gempa Bumi</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <p> <?= $value->jaminan3 ?></p>
                                                </div>
                                            </div>

                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Jaminan Resiko Kebongkaran</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <p> <?= $value->jaminan4 ?></p>
                                                </div>
                                            </div>

                                            <div class="accordion_container">
                                                <div class="accordion d-flex flex-row align-items-center">
                                                    <div>Property/Industry All Risk (PAR/IAR)</div>
                                                </div>
                                                <div class="accordion_panel">
                                                    <p> <?= $value->jaminan5 ?></p>
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
                    <center>
                        <hr class="style5" style="border-top: 5px solid #08347c" width="100px">
                    </center>
                    <br>
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Kelengkapan Berkas Klaim</h2><br>
                    </div>
                    <div class="row text-justify">
                        <div class="col">
                            <div class="cardShadow">
                                <div class="card shadow p-3 mb-2 bg-white rounded">
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul style="list-style-type:circle">
                                            <li class="fs-6">Tertanggung sesegera mungkin melaporkan/menyampaikan keterangan tertulis (sesuai PSKI) mengenai kerugian yang terjadi dengan tidak merubah/merusak objek yang mengalami kerugian.</li>
                                            <li class="fs-6">Pengajuan Klaim dilakukan dengan mengisi Formulir Klaim atau keterangan tertulis (surat/faksimile) dengan melampirkan :
                                                - Copy Polis <br>
                                                - Surat tuntutan kerugia <br>
                                                - Surat keterangan kejadia <br>
                                                - Estimasi kerugian <br>
                                                - Surat keterangan dari kepolisia <br>
                                                - Dokumen pendukung lainnya yang diperlukan
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
            </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->