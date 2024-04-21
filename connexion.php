<?php
try{

$bd=new PDO('mysql:host=localhost;dbname=ararat','root','');
echo"connection reussie";

}catch(PDOException $e){
 
    
    echo "Erreur :" .$e->getMessage();
}

?>