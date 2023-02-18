<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading"><b>
          EDIT DATA SEJARAH
        </b></div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

            echo form_open_multipart('sejarah/edit/'.$sejarah->id_sejarah);

          
            ?>
                
                <div class="form-group">
                    
                    <img src="<?= base_url('foto_sejarah/'.$sejarah->foto_sejarah) ?>" width="150px">
                 </div> 
                 <div class="form-group">
                    <label>Ubah Foto (Format foto jpg/png/jpeg/gif dan ukuran maks. 5mb)</label>
                    <input class="form-control" type="file" name="foto_sejarah" placeholder="Foto" >
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <br>
                <div class="form-group">
                    <label>Deskripsi</label>
                   <textarea name="desc1" id="editor"   required><?= $sejarah->desc1 ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Deskripsi Lanjutan</label>
                   <textarea name="desc2" id="edit1"  required><?= $sejarah->desc2 ?></textarea>
                </div>
                <!-- <div class="form-group">
                    <label>Deskripsi Sejarah 3 </label>
                   <textarea name="desc3" id="editor4"  required><?= $sejarah->desc3 ?></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi Sejarah 4 </label>
                   <textarea name="desc4" id="editor3"  required><?= $sejarah->desc4 ?></textarea>
                </div> -->
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <!-- <button type="reset" class="btn btn-success">Reset</button></div> -->
            
        </div>
<?php echo form_close();?>
    </div>
</div>

