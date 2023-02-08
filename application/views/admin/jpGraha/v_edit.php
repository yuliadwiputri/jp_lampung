<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
           <b>Edit Data JP-GRAHA</b> 
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
            echo form_open_multipart('jpGraha/edit/' . $jpGraha->id_jpGraha);


            ?>

            <div class="form-group">

                <img src="<?= base_url('foto_jpGraha/' . $jpGraha->foto_jpGraha) ?>" width="150px">
            </div>
            <div class="form-group">
                <label>Ubah Foto (Format foto jpg/png/jpeg/gif dan ukuran maks. 5mb)</label>
                <input class="form-control" type="file" name="foto_jpGraha" placeholder="Foto">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
            <br>
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?= $jpGraha->judul ?>" placeholder="Judul">
            </div>
<br>
            <div class="form-group">
                <label>Subjudul </label>
                <input class="form-control" type="text" name="subjudul" value="<?= $jpGraha->subjudul ?>" placeholder="Subjudul">
            </div>
            <br>
            <div class="form-group">
                <label>Info Singkat</label>
                <textarea name="desc1" id="editor3" required><?= $jpGraha->desc1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Deskripsi </label>
                <textarea name="desc2" id="editor4" required><?= $jpGraha->desc2 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                    <label>Bangunan yang dapat diasuransikan</label>
                   <textarea name="bangunan" id="editor6"  required><?= $jpGraha->bangunan ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Harta yang dapat diasuransikan</label>
                   <textarea name="harta" id="editor7"  required><?= $jpGraha->harta ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Ruang Lingkup </label>
                   <textarea name="lingkup" id="editor8"  required><?= $jpGraha->lingkup ?></textarea>
                </div>
<br>
            <div class="form-group">
                <label>Jaminan Resiko Banjir</label>
                <textarea name="jaminan1" id="editor9" required><?= $jpGraha->jaminan1 ?></textarea>
            </div>
            <br>
            <div class="form-group">
<label >Jaminan Resiko Teroris dan Sabotase</label>
                <textarea name="jaminan2" id="editor10" required><?= $jpGraha->jaminan2 ?></textarea>
            </div>
            <br>
            <div class="form-group">
              <label >Jaminan Resiko Gempa Bumi</label>
                <textarea name="jaminan3" id="editor11" required><?= $jpGraha->jaminan3 ?></textarea>
            </div>
            <br>
            <div class="form-group">
             <label >Jaminan Resiko Kebongkaran</label>
                <textarea name="jaminan4" id="editor5" required><?= $jpGraha->jaminan4 ?></textarea>
            </div>
            <br>
            <div class="form-group">
               <label >Property/Industry Risk</label>
                <textarea name="jaminan5" id="editor13" required><?= $jpGraha->jaminan5 ?></textarea>
            </div>
            <br>
            <div class="form-group">
                    <label>Kelengkapan Berkas </label>
                   <textarea name="berkas" id="editor12"  required><?= $jpGraha->berkas ?></textarea>
                </div>
                <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>

        </div>
        <?php echo form_close(); ?>
    </div>
</div>