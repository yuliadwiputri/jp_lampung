<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('sejarah/add')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Add</a>
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
                      
                        <th>Deskripsi 1</th>
                        <th>Deskripsi 2</th>
                        <th>Deskripsi 3</th>
                        <th>Deskripsi 4</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($sejarah as $key => $value) {

                    ?>
                        <tr>

                            <td><?= $no++; ?></td>
                            
                            <td><?= $value->desc1 ?></td>
                            <td><?= $value->desc2 ?></td>
                            <td><?= $value->desc3 ?></td>
                            <td><?= $value->desc4 ?></td>
                           
                           <td><img src="<?= base_url('foto_sejarah/'.$value->foto_sejarah) ?>" width="100px"></td>
                            <td>
                            <a href="<?= base_url('sejarah/edit/'.$value->id_sejarah)?>" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i> Edit </a>
                                <a href="<?= base_url('sejarah/delete/' . $value->id_sejarah) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



