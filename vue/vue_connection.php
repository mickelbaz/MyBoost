<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MyBoost - Le Site Web</title>
        <link rel="stylesheet" type="text/css" href="../vue/header_footerCSS.css">
    </head>
    <body>
<div id="bloc_page">
<header>

    <div id="titre_principal">
        <div class="logo">
                <img src="../Images/Logo4.png" alt="Logo de site web MyBoost"/>
                <h1>Un sport, un clic, une communauté!</h1>
            </ul>
        </div>

        <FORM name="connection" method="post" action="">
         <div class="champ1"> <INPUT type="text" name="pseudo" placeholder="Pseudo"/>
            <br></br>
            <INPUT type="password" name="mot_de_passe" placeholder="Mot de passe"/></div>
            <br></br>
            <div class="champ2"><INPUT type="submit" name='connection' value="Valider" /></div>
      </FORM>

    </div>
    <nav>
        <ul>
            <li class="nav-item"><a href="#">Accueil</a></li>
            <li class="nav-item"><a href="#">Mon Compte</a></li>
            <li class="nav-item"><a href="#">Communauté</a>
               <!--<ul class="sub-nav">
                    <li class="sub-nav-item"><a href="#">Sports</a></li>
                    <li class="sub-nav-item"><a href="#">Annuaire</a></li>
                    <li class="sub-nav-item"><a href="#">Groupes</a></li>
                </ul>
            </li>-->
            <li class="nav-item"><a href="#">Forum</a></li>
            <li class="nav-item"><a href="#">À Propos</a></li>
        </ul>
    </nav>
    <div class="search">
        <input type="text" name="name" placeholder="rechercher">
    </div>
</header>
</div>
