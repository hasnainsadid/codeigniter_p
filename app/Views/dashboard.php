<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= site_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= site_url('assets/vendors/css/vendor.bundle.base.css')?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap.css')?>">
    <link rel="stylesheet" href="<?= site_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?= site_url('assets/vendors/owl-carousel-2/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= site_url('assets/vendors/owl-carousel-2/owl.theme.default.min.css')?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= site_url('assets/css/style.css')?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= site_url('assets/images/favicon.png')?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?= $this->include('./includes/sidebar.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?=$this->include('./includes/topbar.php')?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">6</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa fa-cube fa-xl" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Packages</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">14</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa-solid fa-book-atlas fa-xl"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Booking</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">4</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa fa-user fa-xl" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Guides</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">5</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa fa-comments fa-xl" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Messages</h6>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?=$this->include('./includes/footer'); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= site_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= site_url('assets/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?= site_url('assets/vendors/progressbar.js/progressbar.min.js')?>"></script>
    <script src="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap.min.js')?>"></script>
    <script src="<?= site_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script src="<?= site_url('assets/vendors/owl-carousel-2/owl.carousel.min.js')?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= site_url('assets/js/off-canvas.js')?>"></script>
    <script src="<?= site_url('assets/js/hoverable-collapse.js')?>"></script>
    <script src="<?= site_url('assets/js/misc.js')?>"></script>
    <script src="<?= site_url('assets/js/settings.js')?>"></script>
    <script src="<?= site_url('assets/js/todolist.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= site_url('')?>assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>