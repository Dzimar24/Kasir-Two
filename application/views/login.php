<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login By : Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>aset/template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login Bro !!</h3>
                <form action="<?=site_url('auth/process')?>" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control p_input" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password </label>
                    <input type="password" name="password" class="form-control p_input" placeholder="Password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember Me. </label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?=base_url()?>aset/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url()?>aset/template/assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/misc.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/settings.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>