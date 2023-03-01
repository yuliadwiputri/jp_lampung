<div class="col-lg-12">

    <div class="panel panel-primary">
    
    
        <div class="panel-heading">
        <?php if (!empty($jpAstor)) {
        echo '<a href="#" class="btn btn-primary disabled" ><i class="fa fa-plus"></i> Add</a>';
    } else {
    ?> <a href="<?= base_url('jpAstor/add1') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
    <?php } ?>
    <?php
    foreach ($jpAstor as $key => $v) {
        
    } ?>
    <?php $no = 1;
            foreach ($jpAstor as $key => $value) {
            ?>
                <a href="<?= base_url('jpAstor/edit/' . $value->id_jpAstor) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                <a href="<?= base_url('jpAstor/delete/' . $value->id_jpAstor) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                <!-- <a href="<?= base_url('jpAstor/add') ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a> -->
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
                        <td><img src="<?= base_url('foto_jpAstor/' . $value->foto_jpAstor) ?>" width="100px"></td>
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
                            <td><b>Ruang Lingkup</b></td>
                            <td><?= $value->lingkup?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Ilustrasi</b></td>
                            <td><?= $value->ilustrasi?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Resiko Yang Dijamin</b></td>
                            <td><?= $value->jaminan ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Resiko Yang Tidak Dijamin</b></td>
                            <td><?= $value->tidak_jaminan ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Jenis Jaminan Tambahan</b></td>
                            <td><?= $value->jenis ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Kelengkapan Berkas Klaim (Partial Loss)</b></td>
                            <td><?= $value->berkas1 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Total Loss)</b></td>
                                 <td><?= $value->berkas2 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Kelengkapan Berkas Klaim (Tuntutan Pihak 3)</b></td>
                              <td><?= $value->berkas3 ?></td>
                        </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>