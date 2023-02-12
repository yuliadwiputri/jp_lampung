<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Edit Data Carousel
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

            echo form_open_multipart('carousel/edit4/'.$carousel4->id_carousel4);

          
            ?>
                
                <div class="form-group">
                    
                    <img src="<?= base_url('foto_carousel4/'.$carousel4->foto_carousel4) ?>" width="150px">
                 </div> 
                 <div class="form-group">
                    <label>Ubah Foto (format foto jpg/png/jpeg/gif dan ukuran maks. 5mb)</label>
                    <input class="form-control" type="file" name="foto_carousel4" placeholder="Foto" >
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input class="form-control" type="text" name="keterangan4" value="<?= $carousel4->keterangan4 ?>" placeholder="Judul">
                                   </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>
