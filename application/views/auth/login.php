<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPEKA | <?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assetsLTE') ?> /img/BPBDclp.png" type="image/x-icon" />


    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE') ?> /plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE') ?> /plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE') ?> /dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= base_url('assetsLTE') ?> /img/BPBDclp.png" width="40px" alt="" class="brand-image img-circle elevation-3">
            <a href="<?= base_url('auth') ?>"><b>SIPEKA - </b>BPBD</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <?= $this->session->flashdata('message'); ?>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sistem Pelaksanaan Kegiatan </p>

                <form action="<?= base_url('auth') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assetsLTE') ?> /plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assetsLTE') ?> /plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assetsLTE') ?> /dist/js/adminlte.min.js"></script>
    <script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function($) {
            var Body = $('body');
            Body.addClass('preloader-site');
        });
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        $(window).on('load', function() {
            setTimeout(function() {
                $('.preloader-wrapper').fadeOut();
                $('body').removeClass('preloader-site');
                <?php if ($this->session->flashdata('success')) : ?>
                    toastr.success('<?= $this->session->flashdata('success'); ?>');
                <?php elseif ($this->session->flashdata('error')) : ?>
                    toastr.error('<?= $this->session->flashdata('error'); ?>');
                <?php elseif ($this->session->flashdata('img_error')) : ?>
                    toastr.error('<?= $this->session->flashdata('img_error'); ?>');
                <?php endif; ?>
            }, 500);
        });
    </script>

</body>

</html>