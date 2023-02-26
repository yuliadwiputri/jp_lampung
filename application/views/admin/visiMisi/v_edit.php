<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading"><b>
          EDIT DATA VISI & MISI
        </b></div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

            echo form_open_multipart('visiMisi/edit/'.$visiMisi->id);
            ?>
                <div class="form-group">
                    <label>Visi </label>
                   <textarea name="visi" id="editor"   required><?= $visiMisi->visi ?></textarea>
                </div>
                <div class="form-group">
                    <label>Misi </label>
                   <textarea name="misi" id="edit1"  required><?= $visiMisi->misi ?></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <!-- <button type="reset" class="btn btn-success">Reset</button></div> -->
            
        </div>
<?php echo form_close();?>
    </div>
</div>

