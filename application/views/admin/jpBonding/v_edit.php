<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
           <b>Edit Data JP-BONDING</b> 
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
            echo form_open_multipart('jpBonding/edit/' . $jpBonding->id_jpBonding);


            ?>

            <div class="form-group">

                <img src="<?= base_url('foto_jpBonding/' . $jpBonding->foto_jpBonding) ?>" width="150px">
            </div>
            <div class="form-group">
                <label>Ubah Foto (Format foto jpg/png/jpeg/gif dan ukuran maks. 5mb)</label>
                <input class="form-control" type="file" name="foto_jpBonding" placeholder="Foto">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
           <br>
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?= $jpBonding->judul ?>" placeholder="Judul">
            </div>
<br>
            <div class="form-group">
                <label>Subjudul </label>
                <input class="form-control" type="text" name="subjudul" value="<?= $jpBonding->subjudul ?>" placeholder="Subjudul">
            </div>
            <br>
            <div class="form-group">
                <label>Deskripsi Singkat</label>
                <textarea name="desc1" id="editor3" required><?= $jpBonding->desc1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Deskripsi </label>
                <textarea name="desc2" id="editor4" required><?= $jpBonding->desc2 ?></textarea>
            </div>
<br>
            <div class="form-group">
                <label>Kelengkapan Berkas Klaim (Big Bond)</label>
                <textarea name="berkas1" id="editor9" required><?= $jpBonding->berkas1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
<label >Kelengkapan Berkas Klaim (Maintenance Bond)</label>
                <textarea name="berkas2" id="editor10" required><?= $jpBonding->berkas2 ?></textarea>
            </div>
            <br>
            <div class="form-group">
              <label >Kelengkapan Berkas Klaim (Performance Bond)</label>
                <textarea name="berkas3" id="editor11" required><?= $jpBonding->berkas3 ?></textarea>
            </div>
            <br>
            <div class="form-group">
             <label >Kelengkapan Berkas Klaim (Advance Payment Bond)</label>
                <textarea name="berkas4" id="editor6" required><?= $jpBonding->berkas4 ?></textarea>
            </div>
            <br>
            <div class="form-group">
               <label >Kelengkapan Berkas Klaim (Custom Bond)</label>
                <textarea name="berkas5" id="editor7" required><?= $jpBonding->berkas5 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <!-- <button type="reset" class="btn btn-success">Reset</button> -->
            </div>

        </div>
        <?php echo form_close(); ?>
    </div>
</div>