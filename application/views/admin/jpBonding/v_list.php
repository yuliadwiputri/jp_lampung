<div class="col-lg-12">
    <div class="panel panel-primary">
       
            <div class="panel-heading">
            <?php if (!empty($jpBonding)) {
        echo '<a href="#" class="btn btn-primary disabled" ><i class="fa fa-plus"></i> Add</a>';
    } else {
    ?> <a href="<?= base_url('jpBonding/add1') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
    <?php } ?>
    <?php
    foreach ($jpBonding as $key => $v) {
        
    } ?>
            <?php $no = 1;
        foreach ($jpBonding as $key => $value) {

        ?>
                <!-- <a href="<?= base_url('jpBonding/add') ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a> -->
                <a href="<?= base_url('jpBonding/edit/' . $value->id_jpBonding) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                <a href="<?= base_url('jpBonding/delete/' . $value->id_jpBonding) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
                            <th>Atribut</th>
                            <th>Isi</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Foto</b></td>
                        <td><img src="<?= base_url('foto_jpBonding/' . $value->foto_jpBonding) ?>" width="100px"></td>
                    </tr>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Judul</b></td>
                        <td><?= $value->judul ?></td>
                    </tr>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Sub Judul</b></td>
                        <td><?= $value->subjudul ?></td>
                    </tr>
                    <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Info Singkat</b></td>
                            <td><?= $value->desc1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Deskripsi</b></td>
                            <td><?= $value->desc2 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Kelengkapan Berkas Klaim (Big Bond)</b></td>
                            <td><?= $value->berkas1 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Maintenance Bond)</b></td>
                                 <td><?= $value->berkas2 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Performance Bond)</b></td>
                              <td><?= $value->berkas3 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Advance Payment Bond)</b></td>
                              <td><?= $value->berkas4 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Custom Bond)</b></td>
                              <td><?= $value->berkas5 ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                </table>
            </div>

    </div>
</div>