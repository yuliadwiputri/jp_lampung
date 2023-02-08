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
                    <div class="home_slider_background" style="background-image:url(<?= base_url('foto_carousel/' . $value->foto_carousel) ?>"></div>
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

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(<?= base_url('foto_carousel/' . $value->foto_carousel) ?>"></div>
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

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(<?= base_url('foto_carousel/' . $value->foto_carousel) ?>"></div>
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

            </div>
        </div>
        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>


<!-- Features -->

<div class="features">
    <div class="container">
        <div class="container justify-content-center ml-5">
            <div class="row centered">
                <div class="col-md-5">
                    <div class="section_title_container text-right"><br>
                        <h2 class="section_title">PERUSAHAAN ASURANSI</h2>
                        <div class="section_subtitle">
                            <H2>TERKEMUKA</H2>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5">
                    <div class="vr mr-5"></div><br>
                    <p class="ml-4 text-justify">Didirikan pada 27 November 1993 di Jakarta , telah memberikan layanan asuransi yang luas kepada masyarakat di seluruh Indonesia selama lebih dari dua dasawarsa.</p>
                </div>
            </div>
        </div>

        <div class="row features_row">
            <!-- Features Item -->
            <div class="border col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_astor.png"></div>
                    <h3 class="feature_title">Asuransi Kendaraan Bermotor</h3>
                    <div class="feature_text">
                        <p>JP-ASTOR adalah asuransi kendaraan yang dapat menjamin resiko kerusakan dan atau kehilangan kendaraan.</p>
                    </div>
                    <a href="<?= base_url('User/astor') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                </div>
            </div>

            <!-- Features Item -->
            <div class="border col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_aspri.png" style="width: 100px; height:100px;"></div>
                    <h3 class="feature_title">Asuransi Kecelakaan Diri</h3>
                    <div class="feature_text">
                        <p>JP-ASPRI adalah solusi yang tepat untuk memberikan perlindungan pribadi bagi Anda, orang-orang yang Anda sayangi.</p>
                    </div>
                    <a href="<?= base_url('User/aspri') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                </div>
            </div>
        </div>

        <div class="row features_row">
            <!-- Features Item -->
            <div class="border col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_graha.png" style="width: 100px; height:100px;"></div>
                    <h3 class="feature_title">Asuransi Kebakaran (Properti)</h3>
                    <div class="feature_text">
                        <p>JP-GRAHA adalah pilihan tepat untuk produk asuransi asset bangunan Anda dan harta benda didalamnya.</p>
                    </div>
                    <a href="<?= base_url('User/graha') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                </div>
            </div>

            <!-- Features Item -->
            <div class="border col-lg-6 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="<?= base_url() ?>template\img\jp_bonding.png" style="width: 100px; height:100px;"></div>
                    <h3 class="feature_title">Suretyship</h3>
                    <div class="feature_text">
                        <p>JP-BONDING Pelopor Surety Bond yang memberikan jaminan dengan standar kualitas internasional bersertifikasi ISO 9001:2000.</p>
                    </div>
                    <a href="<?= base_url('User/bonding') ?>"><b><u>Lihat Selengkapnya</u></b></a>
                </div>
            </div>
        </div><br><br>

        <!-- Divider -->
        <div class="container justify-content-center ml-5">
            <div class="row centered">
                <div class="col-md-5">
                    <div class="section_title_container text-right"><br>
                        <h2 class="section_title">CORE VALUE</h2>
                        <div class="section_subtitle">
                            <h2>JASA RAHARJA PUTERA</h2>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5">
                    <div class="vr mr-5"></div><br>
                    <p class="ml-4 text-justify">Keputusan Direksi No. SKEP/111/XI/2020 Tanggal 30 November 2020 Tentang Penetapan AKHLAK Sebagai Budaya Perusahaan di PT Jasaraharja Putera</p>
                </div>
            </div>
        </div> <br><br>
    <?php } ?>
    </div>
</div>