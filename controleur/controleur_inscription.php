<?php
require '../modele/modele_utilisateur.php';
require('../vue/vue_inscription.php');


function verif(){

  if (isset($_POST['envoyer']) && $_POST['envoyer']<>""){

    if ($_POST['nom']<>"" && $_POST['prenom'] <> "" &&$_POST['pseudo']<>"" && ((isset($_POST['sexe']) && $_POST["sexe"]=="F")||(isset($_POST['sexe']) && $_POST["sexe"]=="H"))
    && $_POST['adresse']<>"" && $_POST['code_postal']<>""
    && $_POST['ville']<>"" && $_POST['pays']<>"" && $_POST['tel']<>"" && $_POST['mail']<>"" && $_POST['mail2']<>""
    && $_POST['mot_de_passe']<>"" && $_POST['mot_de_passe2']<>""){

      if ($_POST['mot_de_passe']!=$_POST['mot_de_passe2']){?>
        <script language="javascript">alert("Les mots de passe ne sont pas identiques !");</script>
        <?php
      }

      if ($_POST['mail']!=$_POST['mail2']){?>
        <script language="javascript">alert("Les adresses mail ne sont pas identiques !");</script>
      <?php
        }

      if (checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])==false){?>
        <script language="javascript">alert("La date de naissance n'est pas correcte !");</script>
      <?php
      }

      if (verif_pseudo()==false){?>
        <script language="javascript">alert("Ce pseudo est déjà utilisé !");</script>
      <?php
      }
      if ($_POST['mail']==$_POST['mail2'] && verif_mail()==false){?>
          <script language="javascript">alert("Vous êtes déjà inscrit, connectez-vous !");</script>
      <?php
      }

      if ($_POST['mot_de_passe']==$_POST['mot_de_passe2'] && $_POST['mail']==$_POST['mail2']
      && checkdate($_POST['mois'],$_POST['jour'], $_POST['annee'])&& verif_pseudo()==true && verif_mail()==true){
        if(!isset($_POST['condition'])){?>
            <script language="javascript">alert("Vous devez accepter les conditions générales !");</script>
          <?php
        }else{?>
          <script language="javascript">alert("Merci de votre inscription !");</script>
          <?php
            ajout();
            // redirection vers une autre page
        }
      }
    }
    else{?>
      <script language="javascript">alert("Un champ n'est pas rempli !");</script>
      <?php
    }
  }
}

$testverif = verif();






?>
