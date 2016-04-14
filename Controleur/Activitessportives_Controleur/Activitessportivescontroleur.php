<?php

include('header.php');

?>

<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="stylesheet.css" >
<title>Activités sportives</title>
</head>
<body>

	<div id="bloc_page">

            <div class="top"><p>Activités</p>
                </div>

	<div class="sports-aquatiques"><h2 class="categorie-sports">Sports aquatiques</h2>

		<a href="sportChoisi.php?sport=<?php echo('Natation');?>"><img class="imgsport" src="Images/clipart_Natation.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Wakeboard');?>"><img class="imgsport" src="Images/clipart_Wakeboard.png"></a>

	</div>

	<div class="sports-plein-air"><h2 class="categorie-sports">Sports en plein air</h2>

		<a href="sportChoisi.php?sport=<?php echo('Tennis');?>"><img class="imgsport" src="Images/clipart_Tennis.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Fotball');?>"><img class="imgsport" src="Images/clipart_Football.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Roller');?>"><img class="imgsport" src="Images/clipart_Roller.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Escalade');?>"><img class="imgsport" src="Images/clipart_Escalade.png"></a>

	</div>

	<div class="sports-en-salle"><h2 class="categorie-sports">Sports en salle</h2>

		<a href="sportChoisi.php?sport=<?php echo('Handball');?>"><img class="imgsport" src="Images/clipart_Handball.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Boxe');?>"><img class="imgsport" src="Images/clipart_Boxe.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Basket');?>"><img class="imgsport" src="Images/clipart_Basket.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Tennis');?>"><img class="imgsport" src="Images/clipart_Tennis.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Basket');?>"><img class="imgsport" src="Images/clipart_Football.png"></a>
		<a href="sportChoisi.php?sport=<?php echo('Escalade en salle');?>"><img class="imgsport" src="Images/clipart_Escalade-en-salle.png"></a>
	</div>

	<div class="sports-co"><h2 class="categorie-sports">Sports collectifs</h2>
		<a href=""><img class="imgsport" src="Images/clipart_football.png"></a>
		<a href=""><img class="imgsport" src="Images/clipart_basket.png"></a>
		<a href=""><img class="imgsport" src="Images/clipart_Handball.png"></a>
		<a href=""><img class="imgsport" src="Images/clipart_Volleyball.png"></a>
	</div>

<?php

include('footer.php');

?>

        </div>
</body>
</html>
