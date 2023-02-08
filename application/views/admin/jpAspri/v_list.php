<div class="col-lg-12">
    <div class="panel panel-primary">
        <?php $no = 1;
        foreach ($jpAspri as $key => $value) {

        ?>

            <div class="panel-heading">
                <!-- <a href="<?= base_url('jpAspri/add') ?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a> -->
                <a href="<?= base_url('jpAspri/edit/' . $value->id_jpAspri) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                <a href="<?= base_url('jpAspri/delete/' . $value->id_jpAspri) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>

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
                        <td><img src="<?= base_url('foto_jpAspri/' . $value->foto_jpAspri) ?>" width="100px"></td>
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
                            <td><b>Kelebihan</b></td>
                            <td><?= $value->kelebihan ?></td>
                        </tr>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Resiko Yang Tidak Dijamin</b></td>
                            <td><?= $value->tidak_jaminan ?></td>
                        </tr>
                      
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b>Kelengkapan Berkas Klaim</b></td>
                            <td><?= $value->berkas1 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b></b></td>
                                 <td><?= $value->berkas2 ?></td>
                        </tr>
                        <tr>
                        <td><?= $no++; ?></td>
                        <td><b></b></td>
                              <td><?= $value->berkas3 ?></td>
                        </tr>

                  
                    <?php } ?>
                    </tbody>

                </table>
            </div>

    </div>
</div>