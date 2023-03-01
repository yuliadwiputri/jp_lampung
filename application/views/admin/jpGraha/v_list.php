<div class="col-lg-12">
    <div class="panel panel-primary">
   
        <div class="panel-heading">
        <?php if (!empty($jpGraha)) {
        echo '<a href="#" class="btn btn-primary disabled" ><i class="fa fa-plus"></i> Add</a>';
    } else {
    ?> <a href="<?= base_url('jpGraha/add1') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
    <?php } ?>
    <?php
    foreach ($jpGraha as $key => $v) {
        
    } ?>
        <?php $no = 1;
                    foreach ($jpGraha as $key => $value) {

                    ?>
            <!-- <a href="<?= base_url('jpGraha/add') ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a> -->
            <a href="<?= base_url('jpGraha/edit/' . $value->id_jpGraha) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit </a>
            <a href="<?= base_url('jpGraha/delete/' . $value->id_jpGraha) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>

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
                        <td><img src="<?= base_url('foto_jpGraha/' . $value->foto_jpGraha) ?>" width="100px"></td>
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
                            <td><?= $value->lingkup ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Ilustrasi</b></td>
                            <td><?= $value->ilustrasi?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Bangunan Yang Dapat Diasuransikan</b></td>
                            <td><?= $value->bangunan ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Harta Yang Dapat Diasuransikan</b></td>
                            <td><?= $value->harta ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Jaminan Resiko Banjir</b></td>
                            <td><?= $value->jaminan1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Jaminan Resiko Teroris dan Sabotase</b></td>
                            <td><?= $value->jaminan2 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Jaminan Resiko Gempa Bumi</b></td>
                            <td><?= $value->jaminan3 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Jaminan Resiko Kebongkaran</b></td>
                            <td><?= $value->jaminan4 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Property/Industry Risk</b></td>
                            <td><?= $value->jaminan5 ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Kelengkapan Berkas</b></td>
                            <td><?= $value->berkas ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>