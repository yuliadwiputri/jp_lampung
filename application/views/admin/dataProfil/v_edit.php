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

            echo form_open_multipart('dataProfil/edit/'.$dataProfil->id_user);
            ?>
                <div class="form-group">
                    <label>Visi </label>
                    <input class="form-control" type="text" name="nama_user" value="<?= $dataProfil->nama_user ?>" placeholder="Judul">
                 
                </div>
                <div class="form-group">
                    <label>Visi </label>
                    <input class="form-control" type="text" name="username" value="<?= $dataProfil->username ?>" placeholder="Judul">
                 
                </div>
               
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>

