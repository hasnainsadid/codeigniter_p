<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Blog</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Blog Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Details</label>
                        <input type="type" class="form-control" id="exampleInputEmail3" placeholder="Enter Blog Details">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Add Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword4" >
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
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