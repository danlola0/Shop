<?php
session_start();
// Vérifiez si le formulaire a été soumis

if(isset($_POST["monnaie"])){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');

    // Préparation de la requête d'insertion
    $stmt = $bd->prepare("INSERT INTO monnaie (numshop, nomshop, montantinitfc, montantinitdollar, taux, billetsfc, billetsdollar, date_heure, fournisseur) VALUES (:numshop, :nomshop, :montantinitfc, :montantinitdollar, :taux, :billetsfc, :billetsdollar, :date_heure, :fournisseur)");

    // Liaison des paramètres
    $stmt->bindParam(':numshop', $_POST['numshop']);
    $stmt->bindParam(':nomshop', $_POST['nomshop']);
    $stmt->bindParam(':montantinitfc', $_POST['montantinitfc']);
    $stmt->bindParam(':montantinitdollar', $_POST['montantinitdollar']);
    $stmt->bindParam(':taux', $_POST['taux']);
    $stmt->bindParam(':billetsfc', $_POST['billetsfc']);
    $stmt->bindParam(':billetsdollar', $_POST['billetsdollar']);
    $stmt->bindParam(':date_heure', $_POST['date_heure']);
    $stmt->bindParam(':fournisseur', $_POST['fournisseur']);

    // Exécution de la requête
    $stmt->execute();
    
    // Redirection ou message de confirmation
    
}
}


if(isset($_POST['ventedecredit'])){

  // Vérifiez si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Connexion à la base de données
      $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
  
      // Préparation de la requête d'insertion
      $stmt = $bd->prepare("INSERT INTO credit (numshop, nomshop, stockinit, stockvend, reseau, date_heure, fournisseur,stockfinal) VALUES (:numshop, :nomshop, :stockinit, :stockvend, :reseau, :date_heure, :fournisseur,:stockfinal)");
  
      // Liaison des paramètres
      $stmt->bindParam(':numshop', $_POST['numshop']);
      $stmt->bindParam(':nomshop', $_POST['nomshop']);
      $stmt->bindParam(':stockinit', $_POST['stockinit']);
      $stmt->bindParam(':stockvend', $_POST['stockvend']);
      $stmt->bindParam(':reseau', $_POST['reseau']);
      $stmt->bindParam(':date_heure', $_POST['date_heure']);
      $stmt->bindParam(':fournisseur', $_POST['fournisseur']);
      $stmt->bindParam(':stockfinal', $_POST['stockfinal']);
     

      
  
      // Exécution de la requête
      $stmt->execute();
      
      // Redirection ou message de confirmation
      
  }

}

if(isset($_POST['carte'])){

  // Vérifiez si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Connexion à la base de données
      $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
    
  
      // Préparation de la requête d'insertion
$stmt = $bd->prepare("INSERT INTO carte (numshop, nomshop, nomclient, postnom, sexe, telephone, montant, date_heure,retrait) VALUES (:numshop, :nomshop, :nomclient, :postnom, :sexe, :telephone, :montant, :date_heure, :retrait)");
  
      // Liaison des paramètres
      $stmt->bindParam(':numshop', $_POST['numshop']);
      $stmt->bindParam(':nomshop', $_POST['nomshop']);
      $stmt->bindParam(':nomclient', $_POST['nomclient']);
      $stmt->bindParam(':postnom', $_POST['postnom']);
      $stmt->bindParam(':sexe', $_POST['sexe']);
      $stmt->bindParam(':telephone', $_POST['telephone']);
      $stmt->bindParam(':montant', $_POST['montant']);
      $stmt->bindParam(':date_heure', $_POST['date_heure']);
      $stmt->bindParam(':retrait', $_POST['retrait']);


      
  
      // Exécution de la requête
      $stmt->execute();
      
      // Redirection ou message de confirmation
      
  }

  





}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Formulaires</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.svg"
            alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg"
            alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../../assets/images/faces/face28.png" alt="image">
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">
                <?php 
if(isset($_SESSION['nom'])){
echo 'Mr.' .$_SESSION['nom'] ;

}



?>



                </p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
              aria-labelledby="profileDropdown" data-x-placement="bottom-end">
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
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="http://localhost/Shop/index1.php">
                  <span>Déconnexion</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="messageDropdown">
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
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
              data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
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
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.php">
              <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
              <span class="menu-title">Formulaires</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/RE.php">
              <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
              <span class="menu-title">Envois / Retrait</span>
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
                      <p class="mb-1">

                      <?php 
if(isset($_SESSION['nom'])){
echo 'Mr.' .$_SESSION['nom'] ;

} 
?>



                      </p>
                    </div>
                  </div>
                </div>
                <div class="badge badge-danger">3</div>
              </div>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="http://localhost/Shop/index1.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Déconnexion</span></a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Formulaires des Activités </h3>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> La monnaie (Taux)</h4>
                  <form  action="" method="post" class="forms-sample">

                  <div class="form-group">
                      <label for="exampleInputUsername1">Votre code</label>
                      <input type="number" name="numshop"  class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1" >Nom du Shop</label>
                        <select name="nomshop" class="form-control" id="exampleSelectGender">
                          <option value="">Veuillez selectionner votre shop</option>
      
                         
                          <?php
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
    $select_query = $bd->query("SELECT nom FROM shop");
    while ($result = $select_query->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <option> <?php echo htmlspecialchars($result['nom']); ?> </option>
    <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Montant Initial (Fc)</label>
                      <input type="number" name="montantinitfc" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Montant Initial ($)</label>
                      <input type="number" name="montantinitdollar" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Taux Actuel</label>
                      <input type="number" name="taux" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Billet Echangé (Fc)</label>
                      <input type="number" name="billetsfc" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Billet Echangé ($)</label>
                      <input type="number" name="billetsdollar" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Date</label>
                      <input type="date" name="date_heure" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Fournisseur</label>
                      <input type="number" name="fournisseur" class="form-control" id="exampleInputUsername1">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <button type="submit" name="monnaie" class="btn btn-primary mr-2">Envoyer</button>
                    <button class="btn btn-light">Retour</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ventes des credits</h4>
                  <form  action="" method="post"  class="forms-sample">
                  <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Votre code</label>
                      <div class="col-sm-9">
                        <input type="number" name="numshop" class="form-control" id="exampleInputUsername2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleSelectGender" class="col-sm-3 col-form-label">Nom du Shop</label>
                      <div class="col-sm-9">
                        <select name="nomshop" class="form-control" id="exampleSelectGender">
                          <option value="">Veuillez selectionner votre shop</option>
                          <?php
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
    $select_query = $bd->query("SELECT nom FROM shop");
    while ($result = $select_query->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <option> <?php echo htmlspecialchars($result['nom']); ?> </option>
    <?php } ?>




                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Stock Initial</label>
                      <div class="col-sm-9">
                        <input type="number" name="stockinit" class="form-control" id="exampleInputUsername2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Stock Vendu</label>
                      <div class="col-sm-9">
                        <input type="number" name="stockvend" class="form-control" id="exampleInputUsername2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Réseaux</label>
                      <div class="col-sm-9">
                        <select name="reseau" class="form-control" id="exampleSelectGender">
                          <option>Vodacom</option>
                          <option>Airtel</option>
                          <option>Orange</option>
                          <option>Africell</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="date_heure" class="form-control" id="exampleInputUsername2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fournisseur</label>
                      <div class="col-sm-9">
                        <input type="number" name="fournisseur" class="form-control" id="exampleInputUsername2">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Stockfinal</label>
                      <div class="col-sm-9">
                        <input type="number" name="stockfinal" class="form-control" id="exampleInputUsername2">
                      </div>
                    
                      


                    </div>
                  



                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <button type="submit" name="ventedecredit" class="btn btn-primary mr-2">Envoyer</button>
                    <button class="btn btn-light">Retour</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dépôt des cartes</h4>
                  <form action="" method="post" class="forms-sample">
                    <div class="form-group">
                    <div class="form-group">
                      <label for="exampleInputName1">Votre code</label>
                      <input type="number" name="numshop" class="form-control" id="exampleInputName1">
                    </div>

                      <label for="exampleInputName1">Nom Shop</label>
                      <select name="nomshop"  class="form-control" id="exampleInputName1">
                        <option value="">Veuillez selectionner votre shop</option>
                        <?php
    $bd = new PDO('mysql:host=localhost;dbname=araratproject', 'root', '');
    $select_query = $bd->query("SELECT nom FROM shop");
    while ($result = $select_query->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <option> <?php echo htmlspecialchars($result['nom']); ?> </option>
    <?php } ?> 



                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nom du client</label>
                      <input type="text" name="nomclient" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Postnom</label>
                      <input type="text" name="postnom" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Sexe</label>
                      <select name="sexe" class="form-control" id="exampleSelectGender">
                        <option>Masculin</option>
                        <option>Feminin</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Téléphone</label>
                      <input type="number" name="telephone" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Montant</label>
                      <input type="number" name="montant" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Date</label>
                      <input type="date" name="date_heure" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Retrait</label>
                      <input type="number" name="retrait" class="form-control" id="exampleInputName1">
                    </div>
                    <button type="submit" name="carte" class="btn btn-primary mr-2">Envoyer</button>
                    <button class="btn btn-light">Retour</button>
                  </form>
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                arrarat</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a
                  href="https://www.CodeCraft.com/" target="_blank">danlola</a> from
                arrat projet</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- bootstrap -->

  <script src="../../assets/js/bootstrap.bundle.js"></script>

  <!-- container-scroller -->
  <!-- plugins:js -->

  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/select2/select2.min.js"></script>
  <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../../assets/js/file-upload.js"></script>
  <script src="../../assets/js/typeahead.js"></script>
  <script src="../../assets/js/select2.js"></script>

  <style>
    /* Styles CSS personnalisés */
    .hidden-option {
      display: none;
    }
  </style>
  <script>
    $(document).ready(function () {
      $("#reseau-select").on("change", function () {
        $(this).find(".hidden-option").hide();
      });
    });
  </script>

  <!-- End custom js for this page -->
</body>

</html>