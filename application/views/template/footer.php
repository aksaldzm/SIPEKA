<!-- Modal -->
<div class="modal fade" id="ModalLO" tabindex="-1" role="dialog" aria-labelledby="ModalLOLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLOLabel">Attention!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apa anda ingin Log Out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= site_url('auth/logout') ?>" class="btn btn-primary">Log Out</a>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- ./Modal -->

<!-- Footer-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="<?= site_url('admin') ?>"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
<!-- /.Footer-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/sparklines/sparkline.js"></script>>
<!-- InputMask -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- AutoNumeric -->
<script src="<?= base_url('assetsLTE/js'); ?>/autoNumeric.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>dist/js/adminlte.js"></script>
<!-- Admin Custom -->
<script src="<?= base_url('assetsLTE/'); ?>js/admin.js"></script>
<script src="<?= base_url('assetsLTE/'); ?>custom.js"></script>
<script src="<?= base_url('assetsLTE/'); ?>custom2.js"></script>
<script src="<?= base_url('assetsLTE/'); ?>custom3.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>
<script>
    $(document).ready(function($) {
        var Body = $('body');
        Body.addClass('preloader-site');
    });
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 3000,
    //     timerProgressBar: true
    // });
    // Toastr Option
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