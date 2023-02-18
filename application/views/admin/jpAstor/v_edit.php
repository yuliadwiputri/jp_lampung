<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
         <b>Edit Data JP-ASTOR</b> 
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            echo form_open_multipart('jpAstor/edit/'.$jpAstor->id_jpAstor);

          
            ?>
                
                <div class="form-group">
                    
                    <img src="<?= base_url('foto_jpAstor/'.$jpAstor->foto_jpAstor) ?>" width="150px">
                 </div> 
                 <div class="form-group">
                    <label>Ubah Foto (format foto jpg/png/jpeg/gif dan ukuran maks 5mb)</label>
                    <input class="form-control" type="file" name="foto_jpAstor" placeholder="Foto" >
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <br>
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="judul" value="<?= $jpAstor->judul ?>" placeholder="Judul">
                </div>
            <br>
                <div class="form-group">
                    <label>Subjudul </label>
                    <input class="form-control" type="text" name="subjudul" value="<?= $jpAstor->subjudul ?>" placeholder="Subjudul">
                </div>
                <br>
                <div class="form-group">
                    <label>Info Singkat</label>
                   <textarea name="desc1" id="editor3"   required><?= $jpAstor->desc1 ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Deskripsi </label>
                   <textarea name="desc2" id="editor4"   required><?= $jpAstor->desc2 ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Ruang Lingkup </label>
                   <textarea name="lingkup" id="editor5"   required><?= $jpAstor->lingkup ?></textarea>
                </div>
                <div class="form-group">
                    <label>Ilustrasi </label>
                   <textarea name="ilustrasi" id="editor13"   required><?= $jpAstor->ilustrasi ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Resiko yang Dijamin </label>
                   <textarea name="jaminan" id="editor6"   required><?= $jpAstor->jaminan ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Resiko yang tidak Dijamin</label>
                   <textarea name="tidak_jaminan" id="editor7"   required><?= $jpAstor->tidak_jaminan ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Jenis Jaminan</label>
                   <textarea name="jenis" id="editor8"   required><?= $jpAstor->jenis ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Berkas (Total Loss)</label>
                   <textarea name="berkas1" id="editor9"   required><?= $jpAstor->berkas1 ?></textarea>
                </div>
                <br>
                <div class="form-group">
                <label>Berkas (Partial Loss)</label>
                   <textarea name="berkas2" id="editor10"   required><?= $jpAstor->berkas2 ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Berkas (Tuntutan Pihak 3)</label>
                   <textarea name="berkas3" id="editor11"   required><?= $jpAstor->berkas3 ?></textarea>
                </div>
                <br>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <!-- <button type="reset" class="btn btn-success">Reset</button></div> -->
            
        </div>
<?php echo form_close();?>
    </div>
</div>

