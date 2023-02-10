<!-- Home -->

<div class="home">
    <?php
    foreach ($carousel as $key => $value) {
    ?>
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(<?= base_url('foto_carousel/' . $value->foto_carousel) ?>)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <!-- <div class="col text-center">
                                <div class="home_slider_title"> <span>Jasa Raharja</span> Putera</div>
                                <div class="home_slider_subtitle">Branch Office Bandar Lampung</div>
                                <div class="home_slider_form_container">
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Home Slider Item 2 -->

            <div class="owl-item">
                <?php
                foreach ($carousel2 as $key => $value) {
                ?>
                    <div class="home_slider_background" alt="<?= $value->keterangan2 ?>" style="background-image:url(<?= base_url('foto_carousel2/' . $value->foto_carousel2) ?>)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <!-- <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title"> <span>Jasa Raharja</span> Putera</div>
                                    <div class="home_slider_subtitle">Branch Office Bandar Lampung</div>
                                    <div class="home_slider_form_container">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
            </div>
        <?php } ?>
        <!-- Home Slider Item 3-->
        <?php
        foreach ($carousel3 as $key => $value) {
        ?>
            <div class="owl-item">
                <div class="home_slider_background" alt="test" style="background-image:url(<?= base_url('foto_carousel3/' . $value->foto_carousel3) ?>"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <!-- <div class="row">
                                <div class="col text-center">
                                    <div class="logo_text"> <span>Jasa Raharja</span> Putera</div>
                                    <div class="home_slider_subtitle">Branch Office Bandar Lampung</div>
                                    <div class="home_slider_form_container">
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        <?php } ?>
            </div>
        </div>
        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>


<!-- Features -->

<div class="features">
    <div class="container">
        <div class="container justify-content-center">
            <div class="row centered d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="section_title_container text-right"><br>
                        <h3 class="section_title">PERUSAHAAN ASURANSI</h3>
                        <div class="section_subtitle">
                            <h3>TERKEMUKA</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5">
                    <div class="vr mr-5"></div><br>
                    <p class="ml-4 text-justify">Didirikan pada 27 November 1993 di Jakarta , telah memberikan layanan asuransi yang luas kepada masyarakat di seluruh Indonesia selama lebih dari dua dasawarsa.</p>
                </div>
            </div>
        </div><br><br>

        <div class="row features_row center d-flex justify-content-center">
            <!-- Features Item 1-->
            <?php
            foreach ($jpAstor as $key => $value) {
            ?>
                <div class="col-lg-5 feature_col">
                    <div class="feature shadow trans_400">
                        <h4 class="feature_title ml-3">ASURANSI KENDARAAN BERMOTOR</h4>
                        <div class="row ml-3">
                            <div class="col-2">
                                <div class="feature_icon mt-3"><img src="<?= base_url() ?>template\img\jp_astor.png"></div>
                            </div>
                            <div class="col-8">
                                <div class="feature_text text-justify">
                                    <p><?= $value->desc1 ?></p>
                                    <a href="<?= base_url('User/astor') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>

                <!-- Features Item 2-->
                <div class="col-lg-5 feature_col">
                    <?php
                    foreach ($jpAspri as $key => $value) {
                    ?>
                        <div class="feature shadow trans_400">
                            <h3 class="feature_title ml-3">ASURANSI KECELAKAAN DIRI</h3>
                            <div class="row ml-3">
                                <div class="col-2">
                                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_aspri.png"></div>
                                </div>
                                <div class="col-8">
                                    <div class="feature_text text-justify">
                                        <p><?= $value->desc1 ?></p>
                                        <a href="<?= base_url('User/aspri') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div><br><br>

        <div class="row features_row d-flex justify-content-center">
            <!-- Features Item 3-->
            <?php
            foreach ($jpGraha as $key => $value) {
            ?>
                <div class="col-lg-5 feature_col">
                    <div class="feature shadow trans_400">
                        <h3 class="feature_title ml-3">ASURANSI KEBAKARAN PROPERTI</h3>
                        <div class="row ml-3">
                            <div class="col-2">
                                <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_graha.png"></div>
                            </div>
                            <div class="col-8">
                                <div class="feature_text text-justify">
                                    <p><?= $value->desc1 ?></p>
                                    <a href="<?= base_url('User/graha') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>

                <!-- Features Item 4-->
                <div class="col-lg-5 feature_col">
                    <?php
                    foreach ($jpBonding as $key => $value) {
                    ?>
                        <div class="feature shadow trans_400">
                            <h3 class="feature_title ml-3">SURETYSHIP</h3>
                            <div class="row ml-3">
                                <div class="col-2">
                                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_bonding.png"></div>
                                </div>
                                <div class="col-8">
                                    <div class="feature_text text-justify">
                                        <p><?= $value->desc1 ?></p>
                                        <a href="<?= base_url('User/bonding') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div><br><br>

        <!-- Divider -->
        <div class="container justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="section_title_container text-right"><br>
                        <h3 class="section_title">CORE VALUE</h3>
                        <div class="section_subtitle">
                            <h3>JASA RAHARJA PUTERA</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5">
                    <div class="vr mr-5"></div><br>
                    <p class="ml-4 text-justify">Keputusan Direksi No. SKEP/111/XI/2020 Tanggal 30 November 2020 Tentang Penetapan AKHLAK Sebagai Budaya Perusahaan di PT Jasaraharja Putera</p>
                </div>
            </div>
        </div> <br><br>

    </div>
</div>