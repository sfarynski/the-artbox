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
    <main>
		<!-- inclusion des oeuvres et fonctions -->

        
<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"][1] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = array("Example content", "cocou");
test();
?>

        <?php
            include_once('oeuvres.php');
            include_once('functions.php');
            $oeuvres2 = setOeuvres($oeuvres);
            //print_r($oeuvres);
            print_r($oeuvres2[16]);
        ?>
		<p><?php echo 'il y a '.countOeuvres($oeuvres2). ' oeuvres sur ce sites' ?><br/></p>
        <div id="liste-oeuvres">
			<?php foreach(getOeuvres($oeuvres2) as $oeuvre) : ?>
				<article class="oeuvre">
					<a href="oeuvre.php?id=<?php echo $oeuvre['number']; ?>">
						<img src=<?php echo $oeuvre['image']; ?> alt=<?php echo $oeuvre['name']; ?>>
						<h2><?php echo $oeuvre['name']; ?></h2>
						<p class="description"><?php echo $oeuvre['artist']; ?></p>
					</a>
				</article>
			<?php endforeach ?>
        </div>
    </main>
	<?php include_once('footer.php'); ?>
</body>
</html>