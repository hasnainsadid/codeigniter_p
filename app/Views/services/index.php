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
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= site_url('assets/css/style.css') ?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= site_url('assets/images/favicon.png') ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <?= $this->include('./includes/sidebar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?= $this->include('./includes/topbar.php') ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Services</h4>
                <div class="table-responsive">
                  <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo session()->getFlashdata('msg'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                  <?php endif; ?>
                  <table class="table table-striped text-center">
                    <thead>
                      <tr>
                        <th> Sl No </th>
                        <th> Service Name </th>
                        <th> Details </th>
                        <th> Price </th>
                        <th> Status </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th> Sl No </th>
                        <th> Service Name </th>
                        <th> Details </th>
                        <th> Price </th>
                        <th> Status </th>
                        <th> Action </th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($services as $item) : ?>
                        <tr>
                          <td class="py-1"><?= $i ?></td>
                          <td> <?= $item['title'] ?> </td>
                          <td> <?= $item['details'] ?> </td>
                          <td> <?= $item['cost'] ?> </td>
                          <td> <?= ($item['status']) == 1 ? 'Active' : 'Inactive' ?> </td>
                          <td>
                            <a href="<?= base_url('/services/edit/' . $item['id']) ?>" class="btn btn-info">Edit</a>
                            <a href="<?= base_url('/services/delete/' . $item['id']) ?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      <?php $i++;
                      endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?= $this->include('./includes/footer'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
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
  <!-- End custom js for this page -->
</body>

</html>