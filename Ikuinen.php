﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<title>Ikuinen : Book|Maxime Callet</title>
	</head>

	<body>
		<div id="bloc_page">
		
			<?php include("entete.php"); ?>

			<section class="home">
				<header class="headhome2"></header>

				<section class="contenu">
					<div class="boutonhometop">
						<a href="index.html">Retour</a>
					</div>
					<br />
					<header>
						<img class="bannierebook" src="image/ikuinen/ikuinen_banner.jpg" alt="Banniere image" />
					</header>
					<article>
						<h1>Introduction :</h1>
						<p>
							<span>Ikuinen</span> est un <span>projet étudiant</span> réalisé en groupe sous <span>Unity3D</span> dans le cadre de la formation <span>ARIES Lyon</span>. Incarnez <span>Kumi</span>, l'enfant de feu, plongé dans un univers victime d'un maléfice, ensevelit sous une neige éternelle. Partez à l'aventure pour briser le sort qui trône sur le monde de <span>Hiutale</span> et découvrez la vérité.
						</p>
						<iframe width="1000" height="563" src="https://www.youtube.com/embed/ZaR0U7B18gs?showinfo=0" frameborder="0" allowfullscreen></iframe>
						<h1>Mon rôle dans le projet :</h1>
						<p>
							Au sein d'<span>Ikuinen</span>, j'ai occupé le poste de <span>programmeur</span>. En effet, je me suis chargé de <span>développer</span> le prototype du jeu sous <span>Unity3D</span> en langage <span>C#</span>. J'ai donc été amené à <span>programmer entièrement</span> le prototype, <span>intégrer</span> des <span>assets 3D</span> dans le moteur de jeu et ainsi <span>créer</span> le <span>Level Design</span> à partir des éléments de Level Building, <span>créer</span> des <span>Shaders</span> animés sous <span>Shaderforge</span> et enfin <span>optimiser</span> le projet en utilisant le <span>Lightmapping</span> et l'<span>Occlusion Culling</span> afin de gagner en performance.
						</p>
						<p>
							Durant la production, j'ai également occupé le poste de <span>Game Designer</span>. Je me suis donc chargé du <span>flow</span> global du jeu en utilisant un <span>gameplay systémique</span> : les pouvoirs que contrôle le joueur sont <span>illimités</span> et <span>libres</span> d'utilisation en interagissant avec l'environnement. Le joueur ressent alors un <span>sentiment de liberté</span> ainsi que la <span>maîtrise</span> de son avatar.
						</p>
						<p>
							Afin de <span>maintenir</span> le joueur dans son <span>expérience de jeu</span>, les challenges s’intensifient au fil de la progression du joueur.  Plus les challenges vont devenir difficiles, plus la <span>sensation de maîtrise</span> sera importante. Le joueur a alors un <span>sentiment de progression</span> qui éveille sa <span>curiosité</span> et sa surprise dans la découverte des prochains challenges.
						</p>
						<p>
							Le plus gros point <span>positif</span> que je retiens de cette <span>expérience</span> est d'avoir occupé le poste de <span>programmeur</span> ainsi que de <span>Game Designer</span>. En effet, l'aspect <span>rationnel</span> de la <span>programmation</span> est un atout qui permet de mieux se <span>projeter</span>, et ainsi <span>créer</span> ses idées de <span>Game Design</span>.
						</p>
						<img src="image/ikuinen/ikuinen1.jpg" alt="Image du jeu" width="1000" height="563" />
						<h1>Pitch :</h1>
						<p>
							<span>Ikuinen</span> est un jeu d'<span>action/aventure</span> avec un aspect <span>plateforme</span>. Le royaume de <span>Hiutale</span> est plongé sous un hiver éternel à la suite d'une malédiction. Kumi, l'enfant du feu, grâce à ses pouvoirs est la seule personne à pouvoir conjurer le sort.
						</p>
						<img src="image/ikuinen/ikuinen2.jpg" alt="Image du jeu" width="1000" height="563" />
						<h1>Gameplay :</h1>
						<p>
							<span>Kumi</span> est l'enfant du <span>feu</span>. Elle possède donc des pouvoirs de feu qui lui permettront de faire <span>fondre, brûler</span> des éléments du décor, ou encore de <span>détruire</span> certaines surfaces fragiles. Cependant, <span>Kumi</span> possède également un <span>bracelet</span> magique, qui lui offre la maîtrise de la <span>glace</span>. Avec ses pouvoirs de glace, l'enfant du feu peut <span>geler</span> des éléments du décor et <span>créer des plateformes</span> de glace afin d'atteindre des hauteurs inatteignables auparavant.
						</p>
						<img src="image/ikuinen/ikuinen3.jpg" alt="Image du jeu" width="1000" height="563">
						<p>
							Les pouvoirs de <span>feu</span> et de <span>glace</span> permettent également de <span>charger</span> les <span>cristaux</span> d'énergies avec le pouvoir correspondant, ou le <span>décharger</span> avec le pouvoir inverse.<br />
						</p>
						<p>
							Les <span>cristaux</span> d'énergies chargés sont des <span>sources d'alimentations</span> : un cristal est incrusté dans une plateforme immobile. Une fois chargé, celui-ci alimente la plateforme qui se déplace.
						</p>
						<img class="imgikuinenalimentation" src="image/ikuinen/ikuinen4.png" alt="Image d'une source d'alimentation" width="664" />
						<h1>Images du jeu :</h1>
						<p>
						</p>
					</article>
						<ul class="diapo">
							<li>
								<a href="#image1">
									<img src="image/ikuinen/ikuinenp1.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image1">
									<img src="image/ikuinen/ikuinenp1.jpg" alt/>
									<a href="#image6" class="prece"></a>
									<a href="#image2" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
							<li>
								<a href="#image2">
									<img src="image/ikuinen/ikuinenp2.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image2">
									<img src="image/ikuinen/ikuinenp2.jpg" alt/>
									<a href="#image1" class="prece"></a>
									<a href="#image3" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
							<li>
								<a href="#image3">
									<img src="image/ikuinen/ikuinenp3.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image3">
									<img src="image/ikuinen/ikuinenp3.jpg" alt/>
									<a href="#image2" class="prece"></a>
									<a href="#image4" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
							<li>
								<a href="#image4">
									<img src="image/ikuinen/ikuinenp4.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image4">
									<img src="image/ikuinen/ikuinenp4.jpg" alt/>
									<a href="#image3" class="prece"></a>
									<a href="#image5" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
							<li>
								<a href="#image5">
									<img src="image/ikuinen/ikuinenp5.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image5">
									<img src="image/ikuinen/ikuinenp5.jpg" alt/>
									<a href="#image4" class="prece"></a>
									<a href="#image6" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
							<li>
								<a href="#image6">
									<img src="image/ikuinen/ikuinenp6.jpg" alt/>
									<span class=clic></span>
								</a>
								<span class="trans-image" id="image6">
									<img src="image/ikuinen/ikuinenp6.jpg" alt/>
									<a href="#image5" class="prece"></a>
									<a href="#image1" class="suiva"></a>
									<a href="#" class="ferm"></a>
								</span>
							</li>
						</ul>
						
					<article>
						<h1>Acteurs du projets :</h1>
						<p>
							<br />
							<span>- COURTOIS Elodie :</span> Direction Artistique<br />
							<span>- DEBARRY Romain :</span> Chef de projet / Level Building<br />
							<span>- CALLET Maxime :</span> Programmation (C# Unity3D) / GameDesign<br />
							<span>- HONG Romain :</span> GameDesign<br />
							<span>- PAGNEUX Alexis :</span> GameDesign / SoundDesign<br />
							<span>- SIRAUDEAU Caroline :</span> Artiste 2D / 3D<br />
							<span>- ZIVEC Delphine :</span> Artiste 2D / 3D / Animator<br />
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