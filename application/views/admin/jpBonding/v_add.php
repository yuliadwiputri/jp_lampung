<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Tambah Data JP-BONDING
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
           echo form_open_multipart('jpBonding/add');
            ?>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto_jpBonding" placeholder="Foto" required>
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
                    <label>Deskripsi Singkat</label>
                   <textarea name="desc1" id="editor3"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi </label>
                   <textarea name="desc2" id="editor4"  ></textarea>
                </div>
                 <div class="form-group">
                    <label>Berkas</label>
                   <textarea name="berkas1" id="editor9"  ></textarea>
                </div>
                <div class="form-group">
                 
                   <textarea name="berkas2" id="editor10"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Berkas</label>
                   <textarea name="berkas3" id="editor11"  ></textarea>
                </div>
                <div class="form-group">
                   
                   <textarea name="berkas4" id="editor6"  ></textarea>
                </div>
                <div class="form-group">
                
                   <textarea name="berkas5" id="editor7"  ></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>

