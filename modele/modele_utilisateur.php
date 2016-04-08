<?php

function ajout(){
  $mdp = sha1($_POST['mot_de_passe']);
  $date="{$_POST["annee"]}-{$_POST["mois"]}-{$_POST["jour"]}";

  $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  $req=$bdd->prepare('INSERT INTO sportif (nom,prenom,pseudo,sexe,date,adresse,code_postal,ville,pays,tel,mail,mot_de_passe)
VALUES (:nom,:prenom,:pseudo,:sexe,:date,:adresse,:code_postal,:ville,:pays,:tel,:mail,:mot_de_passe)');

$req->execute(array(
    'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
    'pseudo'=>$_POST['pseudo'],
    'date'=>$date,
    'sexe'=>$_POST['sexe'],
    'adresse'=>$_POST['adresse'],
    'code_postal'=>$_POST['code_postal'],
    'ville'=>$_POST['ville'],
    'pays'=>$_POST['pays'],
    'tel'=>$_POST['tel'],
    'mail'=>$_POST['mail'],
    'mot_de_passe'=>$mdp));
}

function verif_pseudo(){
    $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo=?');
    $req->execute(array($_POST['pseudo']));
    $donnee=$req->fetch();
    if($donnee){
      return false;
    }
    else{
      return true;
    }
  }

  function verif_mail(){
      $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
      $req=$bdd->prepare('SELECT mail FROM sportif WHERE mail=?');
      $req->execute(array($_POST['mail']));
      $donnee=$req->fetch();
      if($donnee){
        return false;
      }
      else{
        return true;
      }
    }

    function verif_id(){
        $mdp=sha1($_POST['mot_de_passe']);
        $bdd=new PDO('mysql:host=localhost; dbname=myboost; charset=utf8', 'root', '', array (PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
        if (isset($_POST['connection']) && $_POST['connection']<>""){
          $req=$bdd->prepare('SELECT pseudo FROM sportif WHERE pseudo= :pseudo AND mot_de_passe= :mot_de_passe ');
          $req->execute(array(
            'pseudo'=> $_POST['pseudo'],
            'mot_de_passe'=>$mdp));
            $donnee=$req->fetch();
        }
        return $donnee;
      }




 ?>
