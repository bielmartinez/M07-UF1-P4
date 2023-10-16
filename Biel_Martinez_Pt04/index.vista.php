<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estils.css">
	<title>Paginació</title>
</head>

<body>
	<div class="contenidor">
		<h1>Articles</h1>
		<section class="articles">
			<!-- Bucle per a mostrar els articles de la pàgina -->
			<?php foreach ($articles as $article) { ?>
				<ul>
					<li><?php echo $article->article ?></li>
				</ul>
			<?php } ?>
		</section>

		<nav>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<p>Mostrant <?php echo $artPerPag ?> de <?php echo $recompte ?> articles disponibles</p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<p>Pàgina <?php echo $pagina ?> de <?php echo $paginaT ?> </p>
				</div>
			</div>
			<ul class="pagination">
				<!-- Si la pagina actual és > 1, es mostra el botó de pagina anterior -->
				<?php if ($pagina > 1) { ?>
					<li>
						<a href="index.php?pagina=<?php echo $pagina - 1 ?>">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
				<?php } ?>

				<!-- Mostrem totes les pàgines-->
				<?php for ($x = 1; $x <= $paginaT; $x++) { ?>
					<li class="<?php if ($x == $pagina) echo "active" ?>">
						<a href="index.php?pagina=<?php echo $x ?>">
							<?php echo $x ?></a>
					</li>
				<?php } ?>
				<!-- Si la pàgina actual és < que el total de pagines, es mostra el botó de pàgina següent -->
				<?php if ($pagina < $paginaT) { ?>
					<li>
						<a href="index.php?pagina=<?php echo $pagina + 1 ?>">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				<?php } ?>
			</ul>
		</nav>
</body>

</html>