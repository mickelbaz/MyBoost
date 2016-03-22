<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="formulaire.css" />
	<title>MyBoost - Le Site Web</title>
	</head>

	<body>

	<h1>INSCRIPTION</h1>
	<FORM name="formulaire" method="post" action="#">

	<table>
	<tr>
	<td>Nom :</td>
	<td><INPUT type="text" name="nom"/></td>
	</tr>
	<tr>
	<td>Prénom :</td>
	<td><INPUT type="text" name="prenom"/> </td>
	</tr>
	<tr>
	<td>Pseudo :</td>
	<td><INPUT type="text" name="pseudo"/></td>
	</tr>
	<tr>
	<tr></tr>
	<td colspan="2">Choisissez votre avatar ou importez une image :</td>
	</tr>
	<tr>
	<td><INPUT type="checkbox" name="img1"/><img src="Images\avatar1.png"/></td>
	<td><INPUT type="checkbox" name="img2"/><img src="Images\avatar2.png"/></td>
	<td><INPUT type="checkbox" name="img3"/><img src="Images\avatar3.png"/></td>
	<td><INPUT type="checkbox" name="img4"/><img src="Images\avatar4.png"/></td>
	<td class="A"><INPUT type="file" name="img"/></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
	<td>Sexe :</td>
	<td> <INPUT type="radio" name="sexe" value="F"/><label for="F">Féminin</label>&nbsp&nbsp&nbsp <INPUT type="radio" name="sexe" value="H"/><label for="H">Masculin</label></td>
	</tr>
	<tr>
	<td>Date de naissance :</td>
	<td>

	<SELECT name="jour">
		<?php for($jour=1; $jour<=31; $jour++):?>
		<option value="<?php echo $jour?>"><?php echo $jour;
		endfor ;?>
	</SELECT>

<SELECT name="mois">
	<OPTION>Janvier
	<OPTION>Février
	<OPTION>Mars
	<OPTION>Avril
	<OPTION>Mai
	<OPTION>Juin
	<OPTION>Juillet
	<OPTION>Août
	<OPTION>Septembre
	<OPTION>Octobre
	<OPTION>Novembre
	<OPTION>Décembre
	</SELECT>

	<SELECT name="annee";
		<?php for($annee=2016; $annee>=1915; $annee--):?>
		<option value="<?php echo $annee?>"><?php echo $annee;
		endfor ;?>
	</SELECT>


</td>
	</tr>
	<tr>
	<td>Adresse :</td>
	<td colspan="4"><INPUT type="text" name="adresse" size="28"/>&nbsp&nbsp&nbsp&nbsp Code postal :&nbsp&nbsp<INPUT type="text" name="code_postal" size="10"/>&nbsp&nbsp&nbsp&nbsp Ville :&nbsp&nbsp<INPUT type="text" name="ville"/></td>
	</tr>
	<tr>
	<td>Pays :</td>
	<td><INPUT type="text" name="pays" size="28"/></td>
	</tr>
	<tr>
	<td>Téléphone :</td>
	<td><INPUT type="text" name="tel" size="28"/></td>
	</tr>
	<tr>
	<td>Adresse mail :</td>
	<td><INPUT type="email" name="mail" size="28"/></td>
	</tr>
	<tr>
	<td>Confirmation de l'adresse mail :</td>
	<td><INPUT type="email" name="mail2" size="28"/></td>
	</tr>
	<tr>
	<td>Mot de passe :</td>
	<td><INPUT type="password" name="mot_de_passe" size="28"/></td>
	</tr>
	<tr>
	<td>Confirmation du mot de passe :</td>
	<td><INPUT type="password" name="mot_de_passe2" size="28" /></td>
	</tr>
	<tr></tr><tr></tr>
	<tr>
	<td colspan="2"><INPUT type="checkbox" name="condition"/><em>&nbsp J'accepte les conditions générales du site</em></td>
	</tr>
	<tr>
	<td colspan="2"><INPUT type="checkbox" name="news"/><em>&nbsp Je souhaite m'abonner à la newsletter</em></td>
	</tr>
	</table>

	<br></br>
	<div>Valider</div>
	</FORM>
	</body>


</html>
