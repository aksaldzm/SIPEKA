<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets') ?> /img/BPBDclp.png" type="image/x-icon" />
</head>
<style>
    .line-title {
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
    }
</style>

<body>
    <img src="<?= site_url('assetsLTE/img/BPBDclp.png') ?>" class="float-left" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    Laporan Kegiatan Kabupaten Cilacap
                    <br>BPBD Kabupaten Cilacap
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <table class="table table-bordered table-striped">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>