<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Contact|Maxime Callet</title>
	</head>

	<body>
		<div id="bloc_page">

			<?php include("include/header.php"); ?>

			<section class="home">
				<header class="headhome2">
				</header>

				<section class="contenu">
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

				</section>
				
				<?php include("include/copyright.php"); ?>
					
			</section>
		</div>

		<?php include("include/footer.php"); ?>

	</body>
</html>