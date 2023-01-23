<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Edit Struktur Organisasi
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
           echo form_open_multipart('JP_struktur/edit/'.$struktur->id_struktur);
            ?>
            <div class="form-group">
                    <label>Nama </label>
                    <input class="form-control" value="<?= $struktur->nama ?>" type="text" name="nama" placeholder="NAma" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                
                <div class="form-group">
                    
                    <img src="<?= base_url('struktur/'.$struktur->struktur) ?>" width="150px">
                 </div> 
                 <div class="form-group">
                    <label>Ubah Foto</label>
                    <input class="form-control" type="file" name="struktur" placeholder="Foto" >
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
               
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
              
            
        </div>
<?php echo form_close();?>
    </div>
</div>

