<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= site_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('assets/vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap.css') ?>">
  <link rel="stylesheet" href="<?= site_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('assets/vendors/owl-carousel-2/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('assets/vendors/owl-carousel-2/owl.theme.default.min.css') ?>">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= site_url('assets/css/style.css') ?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= site_url('assets/images/favicon.png') ?>" />
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-6 offset-3">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <?php 
                                            $session = session();
                                            if ($session->getFlashdata()) : ?>
                                                <div class="alert alert-danger"><?= $session->getFlashdata('msg');?></div>
                                        <?php endif ?>
                                    </div>
                                    <form class="user" action="<?= site_url('/login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?= site_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= site_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
  <script src="<?= site_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
  <script src="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap.min.js') ?>"></script>
  <script src="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
  <script src="<?= site_url('assets/vendors/owl-carousel-2/owl.carousel.min.js') ?>"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= site_url('assets/js/off-canvas.js') ?>"></script>
  <script src="<?= site_url('assets/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= site_url('assets/js/misc.js') ?>"></script>
  <script src="<?= site_url('assets/js/settings.js') ?>"></script>
  <script src="<?= site_url('assets/js/todolist.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="<?= site_url('') ?>assets/js/dashboard.js"></script>

</body>

</html>