<div class="col-lg-12">

    <?php if (!empty($sejarah)) {
        echo '<a href="#" class="btn btn-primary disabled" ><i class="fa fa-plus"></i> Add</a>';
    } else {
    ?> <a href="<?= base_url('sejarah/add1') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
    <?php } ?>
    <?php
    foreach ($sejarah as $key => $v) {
        
    } ?>
    <br>
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">


            <?php $no = 1;

            foreach ($sejarah as $key => $value) {

            ?>
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
                        <td><img src="<?= base_url('foto_sejarah/' . $value->foto_sejarah) ?>" width="100px"></td>
                    </tr>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Sejarah</b></td>
                        <td><?= $value->desc1 ?></td>

                    </tr>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Deskripsi</b></td>
                        <td><?= $value->desc2 ?></td>

                    </tr>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b>Aksi</b></td>
                        <td><a href="<?= base_url('sejarah/edit1/' . $value->id_sejarah) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="<?= base_url('sejarah/delete/' . $value->id_sejarah) ?>" onclick="return confirm('Apakah Data Akan Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>

    </div>
</div>