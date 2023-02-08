    <div class="features">
        <?php
        foreach ($jpAspri as $key => $value) {

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
                    <div class="col-5">
                        <br>
                        <div class="section_title_container text-justify">
                            <div class="section_subtitle">
                                <div class="card" style="width: 27rem;">
                                    <img src="<?= base_url('foto_jpAspri/' . $value->foto_jpAspri) ?>" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <br><br>
                        <div class="card border mb-3 shadow-sm p-3 mb-5 bg-white rounded" style="max-width: 100%;">
                            <div class="card-body">
                                <div class="card-body text-justify">
                                    <p class="card-text fs-6"><?= $value->desc2 ?></p><br>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary fs-6" type="button">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>

                <div class="container">
                    <center>
                        <h2 class="style5" style="border-top: 5px solid #08347c; width:100px;"></h2>
                        <br>
                        <h4 class="section_title" style=" line-height: 1.7em;">DENGAN JP-ASPRI ANDA DAPAT MEMBERIKAN PERLINDUNGAN 24 JAM NON-STOP</h4>
                        <h4 class="section_title" style=" line-height: 1.7em;">BAGI KELUARGA ANDA, REKAN-REKAN ANDA DAN KARYAWAN ANDA</h4>
                        <h4 class="section_title" style=" line-height: 1.7em;">DARI RESIKO KECELAKAAN YANG DAPAT TERJADI KAPAN DAN DIMANAPUN BERADA.
                    </center><br><br>

                    <div class="row">
                        <div class="col">
                            <div class="team_item">
                                <div class="team_image"><img src="<?= base_url('template\img\pom.png') ?>" alt="pom" width="100px" class="mt-5 ml-5"></div>
                                <div class="team_body">
                                    <div class="team_title"><a href="#">KETENANGAN PIKIRAN</a></div>
                                    <div class="team_subtitle">Jalani tujuanmu tanpa harus khawatir, kami bersamamu.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="team_item">
                                <div class="team_image"><img src="<?= base_url('template\img\dream.png') ?>" alt="pom" width="100px" class="mt-5 ml-5"></div>
                                <div class="team_body">
                                    <div class="team_title"><a href="#">TETAPKAN JALAN MIMPIMU</a></div>
                                    <div class="team_subtitle">Wujudkan cita - citamu serta gapai mimpimu dengan keyakinan dengan pelayanan kami.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="team_item">
                                <div class="team_image"><img src="<?= base_url('template\img\diamond.png') ?>" alt="pom" width="100px" class="mt-5 ml-5"></div>
                                <div class="team_body">
                                    <div class="team_title"><a href="#">CAKUPAN YANG LUAS</a></div>
                                    <div class="team_subtitle">Dapatkan keuntungan dalam cakupan yang luas dalam penanganan kesehatan anda dan keluarga.</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Kelengkapan Berkas -->
                    <div class="container">
                        <br><br><br>
                        <center>
                        <h2 class="style5" style="border-top: 5px solid #08347c; width:100px;"></h2>
                        </center>
                        <br>
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Kelengkapan Berkas Klaim</h2><br>
                        </div>
                        <div class="row text-justify">
                            <div class="col">
                                <div class="cardShadow">
                                    <div class="card shadow p-3 mb-2 bg-white rounded">
                                        <div class="card-body">
                                            <p class="card-text">
                                            <ul style="list-style-type:circle">
                                                <li class="fs-6 text-dark"><?= $value->berkas1 ?><br>
                                                </li>
                                            </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>

                    <!-- Flip Card -->
                    <div class="row">
                        <div class="col">
                            <div class="flip-card" style="width: 500px; height:400px">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front" style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                                        <img src="<?= base_url('template\img\shield.png') ?>" alt="shield" style="width: 80px; height:80px" class="mb-3">
                                        <h3>KELEBIHAN JP-ASPRI</h3>
                                        <!-- <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;"> -->
                                    </div>
                                    <div class="flip-card-back text-left" style="line-height: 2em;">
                                        <ul style="" class="p-5">
                                            <li><?= $value->kelebihan ?></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="col">
                            <div class="flip-card" style="width: 500px; height:400px">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front" style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                                        <img src="<?= base_url('template\img\info.png') ?>" alt="shield" style="width: 80px; height:80px" class="mb-3">
                                        <h3>KECELAKAAN YANG TIDAK DIJAMIN</h3>
                                        <!-- <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;"> -->
                                    </div>
                                    <div class="flip-card-back text-left" style="line-height: 2em;">
                                        <ul style="" class="p-4">
                                            <li><?= $value->tidak_jaminan ?></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- <div class="container">
                    <div class="row">
                        <div class="box-item col-md-4">
                            <div class="flip-box">
                                <div class="inner color-white">
                                    <div class="flip-box-front text-center" style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                                        <h3 class="flip-box-header">KELEBIHAN</h3>
                                        <p>A short sentence describing this callout</p>
                                        <img src="https://s25.postimg.cc/frbd9towf/cta-2.png" alt="" class="flip-box-img">
                                    </div>
                                    <div class="flip-box-back text-center" style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                                        <h3 class="flip-box-header">KELEBIHAN</h3>
                                        <p>A short sentence describing this callout</p>
                                        <button class="flip-box-button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                    </div><br><br>
                </div>
            <?php } ?>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->