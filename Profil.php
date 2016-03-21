<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="styleprofil.css"/>

    <title>Mon profil</title>
  </head>
  <body>
    <div class="avatar">
      <img id="avatar" src="/Users/mickelbaz/Desktop/Images/Man_Silhouette.png"/>
    </div>

    <div class="top">
      <h1>PRÉNOM NOM, <span>Ville</span><br><a href="/Users/mickelbaz/Desktop/Page/Profil.html"><img id="logomodif" class="modifier" src="/Users/mickelbaz/Desktop/Images/modif.png"/><span class="modifier"> Modifier mon compte</span></a></h1>

    </div>

    <div class="info">
      <table style="border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid black;">
                    <th id="title" colspan="2">Informations</th>
                </tr>

            </thead>

            <tbody>
                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Âge</td>
                    <td>20 ans</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Sexe</td>
                    <td>Homme</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Adresse e-mail</td>
                    <td>machin@myboost.fr</td>
                </tr>

                <tr style="border-bottom:1px solid black;">
                    <td style="padding:1em;">Téléphone</td>
                    <td>06 00 00 00 00</td>
                </tr>
            </tbody>
        </table>

    </div>

    <?php
    for ($i=0; $i <100 ; $i++) {
      echo 2;
    }
     ?>

    <div id="detail">

      <div class="category">

        <div class="head_category">
          <h4>Mes sports</h4>
        </div>

        <div class="images">
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_boxe.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_football.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_tennis.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_jogging.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_petanque.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_curling.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_basket.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_golf.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_trampoline.png"/>
          <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/clipart_muscu.png"/>
        </div>

      </div>

      <div class="category">

        <div class="head_category">
          <h4>Mes groupes</h4>
        </div>

        <div class="images">
        <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/avatar1.png"/>
        <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/avatar2.png"/>
        <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/avatar3.png"/>
        <img id="sportimg" src="/Users/mickelbaz/Desktop/Images/avatar4.png"/>
        </div>

      </div>

  </body>
</html>
