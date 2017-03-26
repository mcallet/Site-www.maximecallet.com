<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Contact|Maxime Callet</title>
	</head>

	<body>
		<div id="bloc_page">
			<header class="ban">	
				<a href="index.html"><img class="logoheader" src="image/logo.png" alt="logo du site" />
				<div class="titresite">
					<h1>Maxime callet</h1>
					<div class="alignh2">
						<div class="bordureh2l"></div>
						<h2>Unity Developer</h2>
						<div class="bordureh2r"></div>
					</div>
					</a>
				</div>
			</header>

			<section class="home">
				<header class="headhome2">
				</header>

				<section class="contenu">
					<div class="boutonhometop">
						<a href="index.html">Retour home</a>
					</div>
					<br />
					<h1>Pour me contacter, rien de plus simple :</h1>

					<form method="post" action="pagephp">
					<p>
						<label for="pseudo">Nom :</label><br />
						<input type="text" name="Nom" placeholder="Entrez un nom" id="pseudo" />
					</p>
					</form>

					<form method="post" action="pagephp">
					<p>
						<label for="email">Courrier électronique :</label><br />
						<input type="email" name="email" placeholder="Entrez l'adresse e-mail" id="email" />
					</p>
					</form>

					<form method="post" action="pagephp">
					<p>
						<label for="siteweb">Site Web : (facultatif)</label><br />
						<input type="url" name="siteweb" placeholder="Entrez un site web" id="siteweb" />
					</p>
					</form>

					<form method="post" action="pagephp">
					<p>
						<label for="message">Site Web : (facultatif)</label><br />
						<textarea name="message" placeholder="Entrez votre message" id="message" ></textarea>
					</p>
					</form>

					<input type="submit" value="Envoyer" />
					<p class="contact">
						contact@maximecallet.com<br />
						06.61.28.67.07
					<a href="index.html">BOUTON EN BAS LE MEME QUOI "TE FAIT PAS CHIER"</a>
				</section>
				<p class="copyright">© 2015 by Maxime Callet - Tous droits réservés - Les différents contenus de ce site ne sont pas libres de droits.</p>
			</section>
		</div>
		<footer>
			<div class="footerlogosite">
				<img class="logoheader" src="image/logo.png" alt="logo du site" />
				<div class="titresite">
					<h1>Maxime callet</h1>
					<div class="alignh2">
						<div class="bordureh2l"></div>
						<h2>Unity Developer</h2>
						<div class="bordureh2r"></div>	
					</div>
				</div>
				<p>Design : Maxime Callet <br />
				Dév. et intégration : Thomas Meytre</p>
			</div>
		</footer>
	</body>
</html>