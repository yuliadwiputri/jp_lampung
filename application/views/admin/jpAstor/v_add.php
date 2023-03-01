<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Tambah Data JP-ASTOR
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
           echo form_open_multipart('jpAstor/add');
            ?>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto_jpAstor" placeholder="Foto" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="judul" placeholder="Judul">
                </div>
            
                <div class="form-group">
                    <label>Subjudul </label>
                    <input class="form-control" type="text" name="subjudul" placeholder="Subjudul">
                </div>
                <div class="form-group">
                    <label>Info Singkat</label>
                   <textarea name="desc1" id="editor3"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi </label>
                   <textarea name="desc2" id="editor4"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Ruang Lingkup </label>
                   <textarea name="lingkup" id="editor5"  ></textarea>
                </div>
                <div class="form-group">
                    <label>ilustrasi </label>
                   <textarea name="ilustrasi" id="editor"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Resiko yang Dijamin </label>
                   <textarea name="jaminan" id="editor6"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Resiko yang tidak Dijamin</label>
                   <textarea name="tidak_jaminan" id="editor7"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Jaminan Tambahan</label>
                   <textarea name="jenis" id="editor8"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Berkas Klaim (Partial Loss)</label>
                   <textarea name="berkas1" id="editor9"  ></textarea>
                </div>
                <div class="form-group">
                <label>Berkas Klaim (Total Loss)</label>
                   <textarea name="berkas2" id="editor10"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Berkas(Tuntutan Pihak Ketiga)</label>
                   <textarea name="berkas3" id="editor11"  ></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>

