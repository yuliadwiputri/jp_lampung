<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('jpGraha/add')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a>
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
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Subjudul</th>
                        <th>Deskripsi Singkat</th>
                        <th>Deskripsi </th>
                        <th>Bangunan Yang Dapat Diasuransikan</th>
                        <th>Harta Yang Dapat Diasuransikan</th>
                        <th>Ruang Lingkup</th>
                        
                        <th colspan="5">jaminan </th>
                        <th>Kelengkapan Berkas</th>
                      
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($jpGraha as $key => $value) {

                    ?>
                        <tr>

                            <td><?= $no++; ?></td>
                           <td><img src="<?= base_url('foto_jpGraha/'.$value->foto_jpGraha) ?>" width="100px"></td>
                            <td><?= $value->judul ?></td>
                            <td><?= $value->subjudul ?></td>
                            <td><?= $value->desc1 ?></td>
                            <td><?= $value->desc2 ?></td>
                            <td><?= $value->bangunan ?></td>
                            <td><?= $value->harta ?></td>
                            <td><?= $value->lingkup ?></td>
                        
                            <td><?= $value->jaminan1 ?></td>
                            <td><?= $value->jaminan2 ?></td>
                            <td><?= $value->jaminan3 ?></td>
                            <td><?= $value->jaminan4 ?></td>
                            <td><?= $value->jaminan5 ?></td>
                            <td><?= $value->berkas ?></td>
                            <td>
                            <a href="<?= base_url('jpGraha/edit/'.$value->id_jpGraha)?>" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?= base_url('jpGraha/delete/' . $value->id_jpGraha) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



