<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Edit Data Profil Manajemen
        </div>
        <div class="panel-body">
            <?php
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
           echo form_open_multipart('profil/edit/'.$profil->id_profil);
            ?>
            <div class="form-group">
                    <label>Nama </label>
                    <input class="form-control" value="<?= $profil->nama_profil ?>" type="text" name="nama_profil" placeholder="Nama" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Jabatan </label>
                    <input class="form-control" value="<?= $profil->jabatan ?>" type="text" name="jabatan" placeholder="Jabatan" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    
                   <img src="<?= base_url('foto_profil/'.$profil->foto_profil) ?>" width="150px">
                </div>
                <div class="form-group">
                    <label>Ubah Foto</label>
                    <input class="form-control" type="file" name="foto_profil" placeholder="Foto" >
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                
            
        </div>
<?php echo form_close();?>
    </div>
</div>

