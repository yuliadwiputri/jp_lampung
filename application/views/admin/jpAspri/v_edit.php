<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
           <b>Edit Data JP-ASPRI</b> 
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
            echo form_open_multipart('jpAspri/edit/' . $jpAspri->id_jpAspri);


            ?>

            <div class="form-group">

                <img src="<?= base_url('foto_jpAspri/' . $jpAspri->foto_jpAspri) ?>" width="150px">
            </div>
            <div class="form-group">
                <label>Ubah Foto (Format foto jpg/png/jpeg/gif dan ukuran maks. 5mb)</label>
                <input class="form-control" type="file" name="foto_jpAspri" placeholder="Foto">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <br>
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?= $jpAspri->judul ?>" placeholder="Judul">
            </div>
            <br>
            <div class="form-group">
                <label>Subjudul </label>
                <input class="form-control" type="text" name="subjudul" value="<?= $jpAspri->subjudul ?>" placeholder="Subjudul">
            </div>
            <br>
            <div class="form-group">
                <label>Info Singkat</label>
                <textarea name="desc1" id="editor3" required><?= $jpAspri->desc1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Deskripsi </label>
                <textarea name="desc2" id="editor4" required><?= $jpAspri->desc2 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Kelebihan </label>
                <textarea name="kelebihan" id="editor6" required><?= $jpAspri->kelebihan ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Resiko yang tidak Dijamin</label>
                <textarea name="tidak_jaminan" id="editor7" required><?= $jpAspri->tidak_jaminan ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Berkas</label>
                <textarea name="berkas1" id="editor9" required><?= $jpAspri->berkas1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
            <label>Keuntungan</label>
                <textarea name="keuntungan" id="editor10" required><?= $jpAspri->keuntungan ?></textarea>
            </div>
            <br>
            <div class="form-group">
               
                <textarea name="keuntungan1" id="editor11" required><?= $jpAspri->keuntungan1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
               
               <textarea name="keuntungan2" id="editor12" required><?= $jpAspri->keuntungan2 ?></textarea>
           </div>
           <br>
           <div class="form-group">
               
               <textarea name="keuntungan3" id="editor5" required><?= $jpAspri->keuntungan3 ?></textarea>
           </div>
           <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>
<br>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>