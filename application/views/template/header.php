<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?> - Evaluasi</title>
    <link rel="icon" href="fav/icon" type="image/gif" sizes="16x16">

    <link href="<?= base_url() ?>assets/dist/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/dist/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />


    <script src="<?= base_url() ?>assets/dist/js/all.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/dist/assets/demo/datatables-demo.js"></script>

    <!-- select2 -->
    <link href="<?= base_url('assets/plugins/select2-3.5.3/select2.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/plugins/select2-3.5.3/select2-bootstrap.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/plugins/select2-3.5.3/select2.min.js') ?>"></script>

    <!-- sweetalert -->
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2@9.js') ?>"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url('dashboard') ?>">License System</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <?php if ($this->session->userdata('email')) { ?>
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </div>
                <?php } else { ?>
                    <a class="btn btn-default text-white" href="<?= base_url('auth') ?>"><i class="fas fa-sign-in-alt fa-fw"></i> Login</a>
                <?php } ?>
            </li>
        </ul>
    </nav>