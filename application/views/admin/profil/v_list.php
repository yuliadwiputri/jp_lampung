<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('profil/add')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a>
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
                           <td><img src="<?= base_url('foto_profil/'.$value->foto_profil) ?>" width="100px"></td>
                            <td>
                            <a href="<?= base_url('profil/edit/'.$value->id_profil)?>" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?= base_url('profil/delete/' . $value->id_profil) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



