<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="<?=base_url()?>aset/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- Css Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url()?>aset/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url()?>aset/template/assets/images/favicon.png" />

    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          border: 1px solid transparent;
          padding: 8px;
        }

        #searchInput {
          margin-bottom: 10px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:<?=base_url()?>aset/template/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>aset/template/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="<?=site_url('dashboard')?>"><img src="<?=base_url()?>aset/template/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <?php if ($this->fungsi->user_login()->level == 1) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face9.jpg" alt="">
                  <?php } ?>
                  <?php if ($this->fungsi->user_login()->level == 2) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face10.jpg" alt="">
                  <?php } ?>
                  <?php if ($this->fungsi->user_login()->level == 3) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face24.jpg" alt="">
                  <?php } ?>                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?= ucfirst($this->fungsi->user_login()->username)?></h5>
                  <span>Diamond Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Main Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=site_url('dashboard')?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if ($this->fungsi->user_login()->level == 3) { ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?=site_url('supplier')?>">
              <span class="menu-icon">
                <i class="mdi mdi-dropbox"></i>
              </span>
              <span class="menu-title">Suppliers</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= site_url('customer')?>">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Customers</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-package"></i>
              </span>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('category')?>"> Categories </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('unit')?>"> Units </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= site_url('item')?>"> Items </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <small class="nav-link">Setting</small>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= site_url('log')?>">
              <span class="menu-icon">
                <i class="mdi mdi-camera-timer"></i>
              </span>
              <span class="menu-title">Log Activity</span>
            </a>
          </li>
          <?php } ?>
          <?php if ($this->fungsi->user_login()->level == 2) { ?>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-credit-card"></i>
              </span>
              <span class="menu-title">Transaction</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Sales</a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Stock In</a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Stock Out</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#dropdown" aria-expanded="false" aria-controls="dropdown">
              <span class="menu-icon">
                <i class="mdi mdi-chart-pie"></i>
              </span>
              <span class="menu-title">Report</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dropdown">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Sales</a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Stock</a></li>
              </ul>
            </div>
          </li>
          <?php } ?>
          <?php if ($this->fungsi->user_login()->level == 1) { ?>
          <li class="nav-item nav-category">
          </li>
          <li class="nav-item nav-category">
            <small class="nav-link">Setting</small>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= site_url('user')?>">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= site_url('log')?>">
              <span class="menu-icon">
                <i class="mdi mdi-camera-timer"></i>
              </span>
              <span class="menu-title">Log Activity</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:<?=base_url()?>aset/template/partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?=base_url()?>aset/template/index.html">
            <img src="<?=base_url()?>aset/template/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>aset/template/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>aset/template/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="<?=base_url()?>aset/template/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                  <?php if ($this->fungsi->user_login()->level == 1) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face9.jpg" alt="">
                  <?php } ?>
                  <?php if ($this->fungsi->user_login()->level == 2) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face10.jpg" alt="">
                  <?php } ?>
                  <?php if ($this->fungsi->user_login()->level == 3) { ?>
                    <img class="img-xs rounded-circle" src="<?=base_url()?>aset/template/assets/images/faces/face24.jpg" alt="">
                  <?php } ?>
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= ucfirst($this->fungsi->user_login()->name)?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a  href="<?=site_url('auth/logout')?>" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center"><?= $this->fungsi->user_login()->email?></p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
          
                <?php echo $contents ?>
              
              </div>
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
          <!-- partial -->
        </div>
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- container-scroller -->

    <!-- Css Bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->

    <!-- plugins:js -->
    <script src="<?=base_url()?>aset/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/off-canvas.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/misc.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/settings.js"></script>
    <script src="<?=base_url()?>aset/template/assets/js/todolist.js"></script>


    <script src="<?=base_url()?>aset/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>aset/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#table1').DataTable()
      });
    </script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
      function getValue() {
      var dropdown = document.getElementById("dropdown");
      var selectedValue = dropdown.options[dropdown.selectedIndex].value;
      console.log(selectedValue);
    }
    </script>
  </body>
</html>