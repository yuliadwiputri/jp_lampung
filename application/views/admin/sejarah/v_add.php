<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Tambah Data sejarah
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
           echo form_open_multipart('sejarah/add');
            ?>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto_sejarah" placeholder="Foto" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Deskripsi Sejarah 1 </label>
                   <textarea name="desc1" id="editor"  ></textarea>
                </div>
            
                <div class="form-group">
                    <label>Deskripsi Sejarah 2 </label>
                   <textarea name="desc2" id="edit1"  ></textarea>
                </div>
                <!-- <div class="form-group">
                    <label>Deskripsi Sejarah 3 </label>
                   <textarea name="desc3" id="editor3"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi Sejarah 4 </label>
                   <textarea name="desc4" id="editor4"  ></textarea>
                </div> -->
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>

