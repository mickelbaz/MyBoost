<?php

require '../modele/modele_utilisateur.php';

function connect(){
    $resultat=verif_id();
    if (isset($_POST['connection']) && $_POST['connection']<>""){
      if(!$resultat){
        echo 'Pseudo ou mot de passe incorrect';
      }
       else{
        //session_start();
        //$_SESSION['pseudo']=$_POST['pseudo'];
        echo 'Vous êtes connecté';
      }
    }
}

$testconnect=connect();
require '../vue/vue_connection.php';
?>
