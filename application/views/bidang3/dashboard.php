<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-house-damage"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">JUMLAH BIDANG</span>
                        <span class="info-box-number"> 3
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-8 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-signature"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">KEGIATAN SELURUH</span>
                        <span class="info-box-number"> <?= $allap; ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-building"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">KEGIATAN BIDANG</span>
                        <span class="info-box-number"><?= $lapbid; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
        <!-- /.row -->


        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Kegiatan</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="<?= base_url('bidang3/printe') ?>" class="btn btn-primary">Print</a>
                    <br>
                    <br>
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

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($keg as $l) { ?>
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

                                </tr>
                                <?php $no++; ?>



                            <?php } ?>
                        </tbody>

                    </table>
                </div>
                <!-- ./card-body -->

                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->