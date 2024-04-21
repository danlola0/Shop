
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tables</title>
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
          <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
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
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../../index1.php">
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
                  </div>
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
                <a href="../../index.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Déconnexion</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Gestion des Activités </h3>
            </div>
            <div class="row">              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Monnaie ( Taux )</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Nom Shop</th>
                          <th>Mont Init (Fc)</th>
                          <th>Mont Init ($)</th>
                          <th>Taux Act</th>
                          <th>Bill Ech (Fc)</th>
                          <th>Bill Ech ($)</th>
                          <th>Date</th>
                          <th>Fournisseur</th>
                        </tr>
                     <?php 

    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
          $sql=$bd->query('SELECT * from monnaie');

          while($aff=$sql->fetch()){?>
                    
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select onchange="updateStock(this)">
                               
                              <option> <?php echo  $aff['nomshop']; ?>  </option>
                              
                            </select>
                          </td>
                          <td class="py-1">
                          <?php echo  $aff['montantinitfc']; ?>
                          </td>
                          <td> <?php echo  $aff['montantinitdollar']; ?> </td>
                          <td>
                          <?php echo  $aff['taux']; ?>
                          </td>
                          <td><?php echo  $aff['billetsfc']; ?> </td>
                          <td> <?php echo  $aff['billetsdollar']; ?> </td>
                          <td> <?php echo  $aff['date_heure']; ?> </td>
                          <td> <?php echo  $aff['fournisseur']; ?> </td>
                        </tr>
                        <tr>
                          <td>
                      </tbody>

                      <?php } ?>

                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Crédit</h4>
                    <table class="table table-bordered">
    <thead>
        <tr>
            <th> N° </th>
            <th>Nom shop</th>
            <th> Stock Initial </th>
            <th> Stock Vendu </th>
            <th> Réseaux </th>
            <th> Date </th>
            <th> Fournisseur </th>
            <th>Stock final</th>
            
            <th>Actions Mod / Sup</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql = $bd->query('SELECT * FROM credit ORDER BY date_heure ASC');
        $index = 1;
        while ($aff = $sql->fetch()) { ?>
            <tr>
                <td> <?php echo $index; ?> </td>
                <td>
                    <select onchange="updateStock(this)">
                        <option> <?php echo $aff['nomshop']; ?> </option>
                    </select>
                </td>
                <td class="stock-initial"> <?php echo $aff['stockinit']; ?></td>
                <td> <?php echo $aff['stockvend']; ?> </td>
                <td>
                    <select onchange="updateStock(this)">
                        <option value="Vodacom"> <?php echo $aff['reseau']; ?> </option>
                    </select>
                </td>
                <td> <?php echo $aff['date_heure']; ?> </td>
                <td> <?php echo $aff['fournisseur']; ?> </td>
                <td> <?php echo $aff['stockfinal']; ?> </td>

         </td>
                 
                <td> 
                    <button type="submit" class="btn btn-primary mr-2">Mod</button>
                    <button type="submit" class="btn btn-light">Sup</button>
                </td>
            </tr>
        <?php $index++; } ?>
    </tbody>
</table>
 </div>
                </div>
              </div>
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Dépôt cartes</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> N° </th>
                          <th> Nom Shop</th>
                          <th> Nom Client </th>
                          <th> Postnom </th>
                          <th> Sexe </th>
                          <th> Téléphone </th>
                          <th> Montant </th>
                          <th> Date </th>
                          <th>Retrait</th>
                          <th>Actions Mod / Sup</th>
                        </tr>
                        <?php 

$sql=$bd->query('SELECT * from carte');
$index=1;
while($aff=$sql->fetch()){?>    
  
      


                      </thead>
                      <tbody>
                        <tr>
                          <td> <?php echo $index; ?>  </td>
                          <td>
                            <select onchange="updateStock(this)">
                              <option><?php echo  $aff['nomshop']; ?></option>
                             
                            </select>
                          </td>
                          <td> <?php echo  $aff['nomclient']; ?> </td>
                          <td> <?php echo  $aff['postnom']; ?> </td>
                          <td> <?php echo  $aff['sexe']; ?> </td>
                          <td> <?php echo  $aff['telephone']; ?> </td>
                          <td> <?php echo  $aff['montant']; ?> </td>
                          <td> <?php echo  $aff['date_heure']; ?> </td>
                          <td> <?php echo  $aff['retrait']; ?> </td>

                          <td> 
                            <button type="submit" class="btn btn-primary mr-2">Mod</button>
                            <button type="submit" class="btn btn-light">Sup</button>
                          </td>
                        </tr>
                        <tr>
                      </tbody>

                      <?php $index++; } ?>  
                    </table>
                  </div>
                </div>
              </div>

                            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Argent électronique</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Shop</th>
                          <th>Stock Init (Fc)</th>
                          <th>Stock Init ($)</th>
                          <th>Réseaux</th>
                          <th>Stock Final (Fc)</th>
                          <th>Stock Final ($)</th>
                          <th>Date</th>
                          <th>Emprunte</th>
                        </tr>
                        <?php 

$sql=$bd->query('SELECT * from argentelectronique');
while($aff=$sql->fetch()){?>    
  


                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select onchange="updateStock(this)">
                              <option > <?php echo  $aff['nomshop']; ?> </option>

                            </select>
                          </td>
                          <td class="stock-initial">
                            <?php echo  $aff['stockinitfc']; ?>
                          </td>
                          <td> <?php echo  $aff['stockinitdollar']; ?> </td>
                          <td>
                          <select onchange="updateStock(this)">
                              <option > <?php echo  $aff['reseau']; ?> </option>

                            </select>
                          </td>
                          <td> <?php echo  $aff['stockfinalfc']; ?>  </td>
                          <td> <?php echo  $aff['stockfinaldollar']; ?></td>
                          <td> <?php echo  $aff['date_heure']; ?> </td>
                          <td> <?php echo  $aff['emprunte']; ?> </td>
                        </tr>
                        <tr>
                         
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
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © danlola2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> danlola <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script>
      function updateStock(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var stockInitialCell = selectElement.parentElement.parentElement.querySelector('.stock-initial');
        var stock = selectedOption.getAttribute("data-stock");
        var networkName = selectedOption.value;
        stockInitialCell.textContent = stock + " (" + networkName + ")";
      }
    </script>

    </style>

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