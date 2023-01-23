<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($profil as $key => $value) {

                    ?>
                        <tr>

                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_profil ?></td>
                            <td><?= $value->jabatan ?></td>
                            <td><?= $value->foto_profil ?></td>
                            <td>
                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_profil ?>"><i class="fa fa-pencil"></i> Edit</button>
                                <a href="<?= base_url('profil/delete/' . $value->id_profil) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

<!-- Modal add-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('profil/add'); ?>
                <div class="form-group">
                    <label>Nama </label>
                    <input class="form-control" type="text" name="nama_profil" placeholder="Nama" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Jabatan </label>
                    <input class="form-control" type="text" name="jabatan" placeholder="Jabatan" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="text" name="foto_profil" placeholder="Foto" required>
                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal edit-->
<?php $no = 1;
foreach ($profil as $key => $value) {

?>
    <div class="modal fade" id="edit<?= $value->id_profil ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open('profil/edit/' . $value->id_profil); ?>
                    <div class="form-group">
                        <label>Nama </label>
                        <input class="form-control" type="text" name="nama_profil" value="<?= $value->nama_profil ?>" placeholder="Nama" required>
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label>Jabatan </label>
                        <input class="form-control" type="text" name="jabatan" value="<?= $value->jabatan ?>" placeholder="Jabatan" required>
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input class="form-control" type="text" name="foto_profil" value="<?= $value->foto_profil ?>" placeholder="Foto" required>
                        <!-- <p class="help-block">Example block-level help text here.</p> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>