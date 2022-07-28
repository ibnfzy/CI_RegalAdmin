<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | <?= $title; ?></title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/'); ?>/assets/DataTables/datatables.min.css" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.css">

    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('/'); ?>/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <?= $this->include('admin/layout/navbar'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?= $this->include('admin/layout/sidebar'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content'); ?>
                </div>
                <!-- content-wrapper ends -->
                <?= $this->include('admin/layout/footer'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url('/'); ?>/vendors/base/vendor.bundle.base.js"></script>
    <script src="<?= base_url('/'); ?>/js/jquery-3.6.0.min.js"></script>

    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <script type="text/javascript" src="<?= base_url('/'); ?>/assets/DataTables/datatables.min.js"></script>
    <script src="<?= base_url('/'); ?>/assets/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url('/'); ?>/js/sweetalert.js"></script>
    <!-- inject:js -->
    <script src="<?= base_url('/'); ?>/js/off-canvas.js"></script>
    <script src="<?= base_url('/'); ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('/'); ?>/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <?= $this->renderSection('script'); ?>
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": true,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "600",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>

    <?php
    if (session()->getFlashdata('dataMessage')) {
        foreach (session()->getFlashdata('dataMessage') as $item) {
            echo '<script>toastr["' .
                session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
        }
    }
    if (session()->getFlashdata('message')) {
        echo '<script>toastr["' .
            session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
    }
    ?>

    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>