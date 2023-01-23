<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          Tambah Data Berita
        </div>
        <div class="panel-body">
            <?php
            if (isset($error_upload)) {
                 echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
           echo form_open_multipart('berita/add');
            ?>
            <div class="form-group">
                    <label>Judul Berita </label>
                    <input class="form-control" type="text" name="judul_berita" placeholder="Judul" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="gambar_berita" placeholder="Foto" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Isi Berita </label>
                   <textarea name="isi_berita" id="editor"  ></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <button type="reset" class="btn btn-success">Reset</button></div>
            
        </div>
<?php echo form_close();?>
    </div>
</div>

