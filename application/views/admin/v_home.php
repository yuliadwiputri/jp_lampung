<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('carousel/add')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a>
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
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($carousel as $key => $value) {

                    ?>
                        <tr>

                            <td><?= $no++; ?></td>
                           
                           <td><img src="<?= base_url('foto_carousel/'.$value->foto_carousel) ?>" width="100px"></td>
                           <td><?= $value->keterangan ?></td>
                            <td>
                            <a href="<?= base_url('carousel/edit/'.$value->id_carousel)?>" class="btn btn-primary btn-sm" ><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?= base_url('carousel/delete/' . $value->id_carousel) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                           
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



