<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?= base_url('bidang1/simpanKeg') ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Kegiatan</label>
                                <input type="text" class="form-control" name="id" value="<?= $user['kode']; ?>-<?php echo sprintf("%03s", $id_lap); ?>" placeholder="Enter id" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kegiatan" name="namakeg">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun</label>
                        <select name="thn" class="form-control select2" id="">
                            <option value="" selected disabled>--Pilih Tahun--</option>
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
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group" id="form-kecamatan">
                                <label for="selectFloatingLabel" class="placeholder">Kecamatan</label>
                                <select class="form-control select2" id="kecamatan" name="kecamatan" required>
                                    <option value="" selected disabled>--Pilih Kecamatan--</option>
                                    <?php foreach ($kec as $k) : ?>
                                        <option value="<?= $k['id_kecamatan']; ?>"><?= $k['nama_kecamatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Target</label>
                                <input type="text" class="form-control" name="target" placeholder="Target">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pelaksana</label>
                                <input type="text" class="form-control" name="pelaks" placeholder="Pelaksana">
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
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