<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
	<?php include_once('header.php'); ?>
	<!-- inclusion des oeuvres et fonctions -->
	<?php
		include_once('oeuvres.php');
		include_once('functions.php');
	?>
<main>
	<?php if (isset($_GET["id"])) : ?>
		<?php foreach(getOeuvresWithId($oeuvres, intval($_GET["id"])) as $oeuvre) : ?>
		<article id="detail-oeuvre">
			<div id="img-oeuvre">
				<img src=<?php echo $oeuvre['image']?> alt=<?php echo $oeuvre['name'] ?>>
			</div>
			<div id="contenu-oeuvre">
				<h1><?php echo $oeuvre['name'] ?></h1>
				<p class="description"><?php echo $oeuvre['artist'] ?></p>
				<p class="description-complete">
					<?php echo $oeuvre['description'] ?>
				</p>
			</div>
		</article>
		<?php endforeach ?>
	<?php endif ?>
</main>
<?php include_once('footer.php'); ?>
</body>
</html>