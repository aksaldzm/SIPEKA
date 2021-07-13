<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card card-primary">

            <!-- /.card-header -->
            <!-- form start -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="width: 100%;height:auto;" id="tables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Laporan</th>
                                <th>Nama</th>
                                <th>Nama Kegiatan</th>
                                <th>Tahun</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Target</th>
                                <th>Pelaksana</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($lap as $l) { ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $l['id_laporan'] ?></td>
                                    <td><?= $l['nama'] ?></td>
                                    <td align="center"><?= $l['kegiatan'] ?></td>
                                    <td align="center"><?= $l['tahun'] ?></td>
                                    <td align="center"><?= $l['nama_kecamatan'] ?></td>
                                    <td align="center"><?= $l['nama_desa'] ?></td>
                                    <td align="center"><?= $l['target'] ?></td>
                                    <td align="center"><?= $l['pelaksana'] ?></td>
                                    <td align="center">
                                        <a href="" data-toggle="modal" data-target="#editkeg<?= $l['id_laporan'] ?>" class="badge badge-primary ">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    </td>

                                </tr>
                                <?php $no++; ?>

                                <div class="modal fade" id="editkeg<?= $l['id_laporan'] ?>" tabindex="-1" aria-labelledby="editkeg<?= $l['id_laporan'] ?>Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editkeg<?= $l['id_laporan'] ?>Label">Edit Kegiatan</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('bidang3/editKeg') ?>" method="post">
                                                    <div class="form-group form-group-default">
                                                        <label>Id Laporan</label>
                                                        <input type="text" name="id" class="form-control" value="<?= $l['id_laporan'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama </label>

                                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $l['nama'] ?>" required>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Kegiatan</label>
                                                        <input type="text" class="form-control" placeholder="Alamat E-mail" name="namakeg" value="<?= $l['kegiatan'] ?>" required>
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label for="exampleInputPassword1">Tahun</label>
                                                        <select name="thn" class="form-control select2" id="">
                                                            <option value="<?= $l['tahun'] ?>" selected disabled><?= $l['tahun'] ?></option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                        </select>
                                                    </div>





                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Target</label>
                                                                <input type="text" class="form-control" placeholder="Alamat E-mail" name="target" value="<?= $l['target'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-default">
                                                                <label>Pelaksana</label>
                                                                <input type="text" class="form-control" placeholder="Alamat E-mail" name="pelaks" value="<?= $l['pelaksana'] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <!-- /.card-body -->


    </div>
    <!-- /.row -->


    <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->



    <!-- /.row -->

    <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->