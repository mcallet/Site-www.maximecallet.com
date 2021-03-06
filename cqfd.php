﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<title>CQFD | Maxime Callet</title>
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
						<img class="bannierebook" src="image/cqfd/cqfd_banner.jpg" alt="Banniere image" />
					</header>
					<article>
						<h1>Introduction</h1>
						<p>
							<span>CQFD</span> est un <span>serious game</span> de mathématiques qui emploie les techniques du jeu vidéo pour un <span>enseignement ludique</span>. Le contenu pédagogique est <span>conçu</span> en collaboration avec des professeurs de l'Académie d'Aix-Marseille et <span>certifié</span> par l'Education Nationale. Il est utilisé <span>en classe</span> avec le professeur ou à la maison avec les parents, dans le but d'<span>apprendre en s'amusant</span>.
						</p>
						<iframe width="1000" height="563" src="https://www.youtube.com/embed/CS_rxeIgwR4?showinfo=0" frameborder="0" allowfullscreen></iframe>
						<h1>Historique du projet</h1>
						<p>
							<span>CQFD</span> est le fruit de l'appel à projets du ministère de l’<span>Éducation Nationale</span> : "e-éducation n°2". Il a donc été développé pendant 3 ans par un studio de développement français, avant d'être repris en main par <span>Aries Développement</span>, où j'occupe le poste de <span>Programmeur Gameplay</span>.
						</p>
						<h1>Pitch</h1>
						<p>
							Le jeu est composé de 2 grandes époques : l'Antiquité et la Renaissance. Le joueur est téléporté à l'âge d'or des mathématiques : il <span>explore</span> les villes d'époque, <span>rencontre</span> des personnages importants qui <span>nourrissent sa culture général</span>, et découvre les mathématiques. Pour cela, il y a les <span>Épreuves</span> : le théorème de Thalès, la numération Romaine, la maîtrise de la langue.
						</p>
						<img width="1000" height="563" src="image/cqfd/cqfd2.jpg" alt="Image du jeu" />
						<h1>Mon rôle dans le projet</h1>
						<p>
							Les <span>premiers</span> objectifs lors de la reprise du projet : <span>playtester</span> et <span>debugger</span> le jeu afin de le <span>commercialiser</span> pour le grand public. La plus grande difficulté est donc de se plonger dans une nouvelle structure/hiérarchie complexe, développée pendant 3 ans, sans aucune documentations. 
						</p>
						<p>
							Ma <span>seconde</span> mission : <span>Refondre l'épreuve de Thalès</span>. A mon arrivé dans le projet, l'épreuve de Thalès exister déjà, mais manquait cruellement de <span>rejouabilité</span> et d'<span>ergonomie</span>.
						</p>
						<p>
							Un des gros points négatif du jeu, était le manque <span>d'informations</span> et de <span>guidage</span>. Le joueur était lâché dans la nature sans savoir quoi faire. Pour palier à cette démotivation des joueurs, l'objectif  était <span>d'introduire</span> des <span>instructions</span>.
						</p>
						<p>
							Afin <span>d'homogénéiser</span> le jeu avec la <span>plateforme</span> d'hébergement et les contraintes techniques, j'ai donc été chargé de <span>refondre</span> l'<span>Interface Utilisateur</span>. Pour cela j'ai utiliser le style <span>Flat Design</span>, sobre et épuré, qui en plus nous as permis <span>d'alléger</span> la taille du build, un <span>facteur critique</span> pour un jeu en ligne.
						</p>
						<img width="1000" height="563" src="image/cqfd/cqfd3.jpg" alt="Image du jeu" />
						<h1>Refonte épreuve de Thalès :</h1>
						<p>
							La <span>requête</span> des professeurs de mathématiques était d'avoir une épreuve qui soit composée de 2 modules indépendants : un module de <span>découverte</span> du théorème de Thalès, un autre <span>d'exerciseur</span> qui permet de s'entraîner avec des situations de Thalès.
						</p>
						<p>
							Pour le module de Découverte, j'ai fais le choix d'apporter de la scénarisation : Thalès étudie les ombres projetées d’objets et leurs tailles. L’élève lui vient alors en aide pour découvrir ensemble ce qui s’appellera par la suite, le théorème de Thalès.
						</p>
						<iframe width="1000" height="563" src="https://www.youtube.com/embed/EVvMaBeTl54?loop=1&playlist=EVvMaBeTl54&showinfo=0&autoplay=1&controls=0" frameborder="0" allowfullscreen></iframe>
						<p>
							Ici, l'élève doit <span>calculer</span> les quotients d'agrandissement entre chaque côté du carré et les côtés correspondant sur le sol, son ombre. Il <span>manipule</span> la figure et la fait tourner pour la mettre en situation de Thalès : parallèle au sol. Les quotients d'agrandissements des côtés sont égaux, on peut donc parler de <span>rapport d'agrandissement</span>.
						</p>
						<p>
							Pour mieux se rendre compte de l'influence de la source lumineuse sur ce rapport d'agrandissement, l'élève manipule la lumière. La forme de l'ombre projetée au sol de la figure est alors <span>recalculé en temps réel</span>.
						</p>
						<p>
							Pour les <span>Exercices</span>, la plus grande difficulté était d'obtenir des résultats de quotients <span>exacts</span> et <span>finis</span>. J'ai donc mis en place une <span>bibliothèque</span> de valeurs dont leur résultats sont exact. Afin de conserver <span>l'algorithme</span> de génération de l'ombre dynamique, j'ai attribué ces valeurs sur les côtés de la figure et de la l'ombre. Les résultats alors calculer par les élèves sont toujours exacts et finis.
						</p>
						<p>	
							Grâce à cette bibliothèque de valeurs, j'ai donc pu rendre les exercices <span>re-jouable</span>, car a chaque nouvel exercice est <span>généré</span> une nouvel instance avec des valeurs et figures <span>différentes</span>.
						</p>
						<h1>Refonte de l'Interface Utilisateur (UI)</h1>
						<p>
							<span>L'UI</span> de la plateforme d'hébergement du jeu avait un style <span>Flat Design</span>. La volonté d'obtenir une <span>cohérence visuel</span> sur les interfaces est justifié par l'anticipation des développements des prochains jeux, afin <span>d'harmoniser</span> l'ensemble.
							<br />Je me suis donc chargé de <span>créer</span> un nouveau menu principal dans ce style <span>simple</span> et <span>épuré</span>.
						</p>
						<img width="1000" height="563" src="image/cqfd/mainmenu.jpg" alt="Image du jeu" />
						<p>Après le menu principal du jeu, il fallait bien s'occuper du menu In-Game :</p>
						<iframe width="1000" height="563" src="https://www.youtube.com/embed/tkFeP2Tp0Us?loop=1&playlist=tkFeP2Tp0Us&showinfo=0&autoplay=1&controls=0" frameborder="0"></iframe>
						<p>Puis s'en est découler naturellement toutes les autres boîtes de dialogue :</p>
						<div class="cqfdimage">
							<img src="image/cqfd/uidialogue.jpg" alt="image d'un dialogue du jeu" />
							<img src="image/cqfd/menuaide.jpg" alt="Image du menu aide" />
						</div>
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