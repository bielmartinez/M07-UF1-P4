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
</body>

</html>