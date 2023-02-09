    <div class="features">
        <?php
        foreach ($jpBonding as $key => $value) {

        ?>
            <div class="container">
                <center>
                    <br><br><br>
                    <h1 class="section_title"><?= $value->judul ?></h1>
                    <h2 class="section_title"><?= $value->subjudul ?></h2>
                    <h2 class="style5" style="border-top: 5px solid #08347c; width:100px;"></h2>
                </center>
                <br>
                <div class="row">
                    <div class="col-lg-5">
                        <br>
                        <div class="section_title_container text-justify">
                            <div class="section_subtitle">
                                <div class="card" style="width: 27rem;">
                                    <img src="<?= base_url('foto_jpBonding/' . $value->foto_jpBonding) ?>" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <br><br>
                        <div class="card border mb-3 shadow-sm p-1 mb-5 bg-white rounded" style="max-width: 100%;">
                            <div class="card-body">
                                <div class="card-body text-justify">
                                    <p class="card-text fs-5"><?= $value->desc2 ?></p><br>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary fs-6" type="button">Daftar</button>
                                    </div>
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
                        <div class="col-lg">
                            <div class="cardShadow">
                                <div class="card shadow p-1 mb-2 ml-2 bg-white rounded" style="height:25rem">
                                    <h7 class="card-header bg-info text-light border-info fs-6"><b>BID BOND</b></h7>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li class="fs-5 ml-0 mr-3"><?= $value->berkas1 ?></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="cardShadow">
                                <div class="card shadow p-1 mb-2 ml-2 bg-white rounded " style="height:25rem">
                                    <h7 class="card-header bg-info text-light border-info fs-6"><b>PERFORMANCE BOND</b></h7>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li class="fs-5 ml-0 mr-3"><?= $value->berkas3 ?></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="cardShadow">
                                <div class="card shadow p-1 mb-2 ml-2 bg-white rounded" style="height:25rem">
                                    <h7 class="card-header bg-info text-light border-info fs-6"><b>MAINTENANCE BOND</b></h7>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li class="fs-5 ml-0 mr-3"><?= $value->berkas2 ?></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <br>
                    <div class="row text-justify">
                        <div class="col-lg">
                            <div class="cardShadow">
                                <div class="card shadow p-1 mb-2 ml-2 bg-white rounded" style="height:25rem">
                                    <h7 class="card-header bg-info text-light border-info fs-6"><b>CUSTOM BOND</b></h7>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li class="fs-6 ml"><?= $value->berkas5 ?></li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="cardShadow">
                                <div class="card shadow p-1 mb-2 ml-2 bg-white rounded" style="height:25rem">
                                    <h7 class="card-header bg-info text-light border-info fs-6"><b>ADVANCE PAYMENT BOND</b></h7>
                                    <div class="card-body text-dark">
                                        <p class="card-text">
                                        <ul>
                                            <li class="fs-5 ml-0 mr-3"><?= $value->berkas4 ?></li>
                                        </ul>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->