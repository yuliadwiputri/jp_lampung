<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('jpAspri/add')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a>
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
                      
                        <th>Kelebihan</th>
                        <th>Resiko Tidak Dijamin</th>
                       
                        <th colspan="3">Berkas </th>
                      
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($jpAspri as $key => $value) {

                    ?>
                        <tr>

                            <td><?= $no++; ?></td>
                           <td><img src="<?= base_url('foto_jpAspri/'.$value->foto_jpAspri) ?>" width="100px"></td>
                            <td><?= $value->judul ?></td>
                            <td><?= $value->subjudul ?></td>
                            <td><?= $value->desc1 ?></td>
                            <td><?= $value->desc2 ?></td>
                          
                            <td><?= $value->kelebihan ?></td>
                            <td><?= $value->tidak_jaminan ?></td>
                         
                            <td><?= $value->berkas1 ?></td>
                            <td><?= $value->berkas2 ?></td>
                            <td><?= $value->berkas3 ?></td>
                            <td>
                            <a href="<?= base_url('jpAspri/edit/'.$value->id_jpAspri)?>" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?= base_url('jpAspri/delete/' . $value->id_jpAspri) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



