<?php
session_start();
try{

$bd=new PDO('mysql:host=localhost;dbname=araratproject','root','');
echo"connection reussie";

}catch(PDOException $e){
 
    echo "Erreur :";
}



if(isset($_POST['enregistre'])){

  
  if(isset($_POST['nom']) and isset($_POST['postnom']) and isset($_POST['password'])   ) {
  $sql=$bd->prepare('INSERT INTO agent values(null,:nom ,:postnom ,:password ) ' );
  $sql->bindValue(':nom' ,$_POST['nom' ] );
  $sql->bindValue(':postnom' ,$_POST['postnom' ] );
  $sql->bindValue(':password' ,$_POST['password' ] );
  $re=$sql->execute();
  
  echo "Enregistrement reussi";
  
  } else {
   echo 'Erreur ';
  
  }

  }




  if(isset($_POST['connect'])){

    if(!empty($_POST['nom']) || !empty($_POST['password'])){
     
   $code=('SELECT nom ,password from agent where nom=:nom and password=:password');
   $rec=$bd->prepare($code);
   $rec->execute(array('nom'=>$_POST['nom'] , 'password'=>$_POST['password'] ));
   $count=$rec->rowCount();

  if($count >0){

 $_SESSION['nom']= $_POST['nom'];
  header('location:http://localhost/Shop/pages/forms/basic_elements.php');

  } else{
   
    echo "erreur";

  } 

  }

}



if(isset($_POST['connect'])){

  if(!empty($_POST['nom']) || !empty($_POST['password'])){
   
 $code=('SELECT nom ,password from admin where nom=:nom and password=:password');
 $rec=$bd->prepare($code);
 $rec->execute(array('nom'=>$_POST['nom'] , 'password'=>$_POST['password'] ));
 $count=$rec->rowCount();

if($count >0){

$_SESSION['nom']= $_POST['nom'];
header('location:http://localhost/Shop');

} else{
 
  echo "erreur";

} 

}

}




?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ararat projet &amp; connectez-vous</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="title-text">
    <div class="title login">Connectez-vous</div>
    <div class="title signup">Crée un compte</div>
  </div>
  <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slide" id="login" checked>
      <input type="radio" name="slide" id="signup">
      <label for="login" class="slide login">Connection</label>
      <label for="signup" class="slide signup">Inscription</label>
      <div class="slider-tab"></div>
    </div>
    <div class="form-inner">
      <form action="" method="post" class="login">
        <div class="field">
          <input type="text" name="nom" placeholder="Nom de l'utilisateur " required>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="votre mot de passe " required>
        </div>
        <div class="pass-link"><a href="#">Mot de passe oubliers?</a></div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" name="connect" value="Se connecter">
        </div>
        <div class="signup-link">Pas de compte? <a href="#">Inscrivez-vous</a></div>
      </form>
      <form action="" method="post" class="signup">
        <div class="field">
          <input type="text" name="nom" placeholder="Entrer votre nom" required>
        </div>
        <div class="field">
          <input type="text" name="postnom" placeholder=" votre postnom" required>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="votre mot de passe" required>
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" name="enregistre" value="Enregistrer">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
