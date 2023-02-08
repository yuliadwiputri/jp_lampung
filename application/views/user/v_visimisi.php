<div class="features">
<?php
foreach ($visiMisi as $key => $value) {

?>
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                    <br><br><b><br></b>
                    <h2 class="section_title">Visi & Misi</h2><br>
                </center>
            </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="col-lg event_col">
            <div class="event event_left">
                <div class="event_body d-flex flex-row align-items-start justify-content-start">
                    <div class="event_date">
                        <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                            <!-- <div class="visi"><b>Visi</b></div> -->
                        </div>
                    </div>
                    <div class="event_content">
                        <div class="event_title"><a href="#">Visi</a></div>
                        <div class="event_info_container">
                            <div class="event_text">
                                <h5><?= $value->visi ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg event_col">
            <div class="event event_left">
                <div class="event_body d-flex flex-row align-items-start justify-content-start">
                    <div class="event_date">
                        <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                            <!-- <div class="misi"><b>Misi</b></div> -->
                        </div>
                    </div>
                    <div class="event_content">
                        <div class="event_title"><a href="#">Misi</a></div>
                        <div class="event_info_container">
                            <div class="event_text">
                                <h5><?= $value->misi ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    
</div>