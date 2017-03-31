<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<title>Space Jam | Maxime Callet</title>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>

			<section class="home">
				<header class="headhome2">
				</header>

				<section class="contenu">
					<div class="boutonhometop">
						<a href="index.html">Retour</a>
					</div>
					<br />
					<header>
						<img class="bannierebook" src="image/spacejam_banner.png" alt="Banniere image" />
					</header>
					<article>
						<h1>Introduction</h1>
						<p>
							<span>Space Jam</span> est un <span>projet personnel</span> réalisé en 2 mois sur <span>Unity</span> pour les plateformes de <span>jeu mobile</span>. Dans ce <span>runner</span>, prenez le <span>contrôle</span> d'un vaisseau spatial, <span>esquivez</span> les obstacles qui s'écrasent, <span>tirez</span> sur les astéroïdes pour <span>gagner</span> le plus de points.
						</p>
						<iframe width="1000" height="563" src="https://www.youtube.com/embed/asyUnkWXxwo?showinfo=0" frameborder="0" allowfullscreen></iframe>
						<h1>Mon rôle dans le projet</h1>
						<p>
							<span>Space Jam</span> étant un <span>projet personnel</span>, j'ai d'abord <span>modélisé</span> le vaisseau spatial sur <span>Maya</span>, avant de démarrer le <span>développement</span> sur <span>Unity</span> en n'utilisant aucune ressource externe. Le développement a surtout était axé sur l'<span>optimisation</span> pour la plateforme de <span>jeu mobile</span>. Pour cela j'ai utilisé des <span>méthodes génériques</span>, réexploitables dans plusieurs cas, ainsi que des <span>coroutines</span>, pour ne pas surcharger inutilement la fonction Update(), et ainsi <span>gagner en performances</span> et en lisibilité dans le code.
						</p>
						<p>
							Enfin, j'ai <span>développé</span> une <span>base de données</span> simple en <span>PHP</span> afin de <span>poster</span> les <span>meilleurs scores</span> atteints, les <span>stocker</span> sur mon <span>hérbegement web</span> pour finalement obtenir un classement des meilleurs scores en jeu.
						</p>
						<h1>Pitch</h1>
						<p>
							<span>Space Jam</span> est un <span>runner</span> dans lequel le joueur <span>contrôle</span> un <span>vaisseau spatial</span> lancé à pleine vitesse, dans un champ d'astéroïde. Le <span>but du jeu</span> est de <span>rester en vie</span> le plus longtemps possible en <span>esquivant les obstacles</span> qui se crashent sur la route, et de <span>gagner</span> le plus de <span>points</span> possible en <span>tirant</span> sur les astéroïdes de couleurs. 
						</p>
						<img width="1000" height="563" src="image/spacejamscreen.png" alt="Image du jeu" />
						<h1>RoadMap</h1>
						<p>
							Afin de <span>dynamiser</span> et <span>varier</span> le <span>gameplay</span>, j'aimerais <span>ajouter</span> des <span>mécaniques de jeu</span> via des <span>collectibles</span> stockable, utilisable une seule fois :
							<br />- <span>SuperShot</span> : Tir un laser très puissant qui explose tous les obstacles dans sa direction.
							<br />- <span>Jump</span> : Slider le doigt vers le haut pour faire "sauter" son vaisseau et ainsi esquiver plus facilement des obstacles.
							<br />- <span>Fly</span> : Il suffit de tapper sur l'écran avec son doigt pour faire voler son vaisseau (réf. FlappyBird).
							<br />- <span>Charge</span> : La charge est une impuslsion qui permet de détruire un obstacle en face de soit.
							<br />- <span>SuperBoost</span> : Permet de bénéficier d'un boost de vitesse de quelques seconde sans avoir à se soucier des colisions (réf. Vitesse lumière : StarWars).
						</p>
						<p>
							<br />Une fois l'un de ces <span>collectible récupéré</span>, une sorte de <span>mini-jeu bonus</span> se déclanchera afin de <span>gagner</span> plus de <span>points</span> et/ou de <span>vitesse</span>.
							<br />Exemple de mini jeu pour <span>Supershot</span> : Détruire 4 obstacle avec le <span>SuperShot</span>.
							<br />Exemple de mini jeu pour <span>Charge</span> : Détruire 2 astéroïdes avec une seule <span>Charge</span>.
							<br />Exemple de mini jeu pour <span>SuperBoost</span> : Traverser 3 anneaux pendant un <span>SuperBoost</span>.
						</p>
						</article>
						<div class="boutonhomebot">
							<a href="index.html">Retour</a>
						</div>
				</section>
				<p class="copyright">© 2014 - 2017 - Maxime Callet - Tous droits réservés - Les différents contenus de ce site ne sont pas libres de droits.</p>
			</section>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>