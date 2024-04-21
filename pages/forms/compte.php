<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Comptes Agents</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Rapports </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
              </div>
            </li>
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Mr Felly</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Verrouiller le compte</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../../index1.html">
                    <span>Déconnexion</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 nouveaux messages.</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div><!---->
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">Toutes les notifications.</h6>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Menu Principal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts/chartjs.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Tendances</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.php">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/forms/compte.php">
                  <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                  <span class="menu-title">Comptes</span>
                </a>
              </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src="../../assets/images/faces/face28.png" alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">Mr Felly</p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger">3</div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="../../index1.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Déconnexion</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Comptes </h3>
            </div>
            <div class="row">              
              

              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gestion des Agents</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> N° </th>
                          <th> Nom </th>
                          <th> Postnom </th>
                          <th> Password </th>
                          <th>Actions Modifier / Supprimer</th>
                        </tr>
<?php 
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');

           
           $sql=$bd->query('SELECT * from agent');
           $index=1;
           while($aff=$sql->fetch()){?>    
           
           
                        
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td> <?php echo $index; ?>  </td>
                          <td> <?php echo  $aff['nom']; ?> </td>
                          <td> <?php echo  $aff['postnom']; ?> </td>
                          <td> <?php echo  $aff['password']; ?> </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                            <button type="submit" class="btn btn-light ">Supprimer</button>
                          </td>
                        </tr>
                        <tr>
                      </tbody>

                      <?php $index++; } ?> 
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Gestion des Administracteurs </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> N° </th>
                          <th> Nom </th>
                          <th> Postnom </th>
                          <th> Password </th>
                          <th>Actions Modifier / Supprimer</th>
                        </tr>
                        <?php 
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');

           
           $sql=$bd->query('SELECT * from admin');
           $index=1;
           while($aff=$sql->fetch()){?>    
           


                        
                      </thead>
                      <tbody>
                        <tr>
                          <td> <?php echo $index; ?> </td>
                          <td> <?php echo  $aff['nom']; ?> </td>
                          <td> <?php echo  $aff['postnom']; ?> </td>
                          <td> <?php echo  $aff['password']; ?> </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                            <button type="submit" class="btn btn-light">Supprimer</button>
                          </td>
                        </tr>
                      </tbody>


                      <?php $index++; } ?>

                    </table>


                    <h4 class="card-title">Liste des Shops </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> N° </th>
                          <th> Nom </th> 
                          <th>Actions Modifier / Supprimer</th>
                        </tr>
            <?php 
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');

            
$sql=$bd->query('SELECT * from shop');
$index=1;
while($aff=$sql->fetch()){?>    



                      </thead>
                      <tbody>
                        <tr>
                          <td> <?php echo $index; ?> </td>
                          <td> <?php echo  $aff['nom']; ?></td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                            <button type="submit" class="btn btn-primary mr-2">Ajouter</button>

                            <button type="submit" class="btn btn-light">Supprimer</button>
                          </td>
                          
                        </tr>
                      </tbody>


                      <?php $index++; } ?>
                    </table>






                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © araratproject</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.CodeCraft.com/" target="_blank">CodeCraft dashboard templates</a> from CodeCraft.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>