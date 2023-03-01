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
           echo form_open_multipart('jpGraha/add');
            ?>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto_jpGraha" placeholder="Foto" required>
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
                    <label>Bangunan yang dapat diasuransikan</label>
                   <textarea name="bangunan" id="editor6"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Harta yang dapat diasuransikan</label>
                   <textarea name="harta" id="editor7"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Ruang Lingkup </label>
                   <textarea name="lingkup" id="editor8"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Ilustrasi </label>
                   <textarea name="ilustrasi" id="editor"  ></textarea>
                </div>
                 <div class="form-group">
                    <label>Jaminan Resiko Banjir</label>
                   <textarea name="jaminan1" id="editor9"  ></textarea>
                </div>
                <div class="form-group">
                <label>Jaminan Resiko Teroris dan Sabotase</label>
                   <textarea name="jaminan2" id="editor10"  ></textarea>
                </div>
                <div class="form-group">
                <label>Jaminan Resiko Gempa Bumi</label>
                   <textarea name="jaminan3" id="editor11"  ></textarea>
                </div>
                <div class="form-group">
                <label>Jaminan Resiko Kebongkaran</label>
                   <textarea name="jaminan4" id="editor5"  ></textarea>
                </div>
                <div class="form-group">
                <label>Jaminan Property/Industry Risk</label>
                   <textarea name="jaminan5" id="editor13"  ></textarea>
                </div>
                <div class="form-group">
                    <label>Kelengkapan Berkas </label>
                   <textarea name="berkas" id="editor12"  ></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                <!-- <button type="reset" class="btn btn-success">Reset</button></div> -->
            
        </div>
<?php echo form_close();?>
    </div>
</div>

