<!DOCTYPE html>
<html>
<head>
	<title>PaginaPrincipal</title>
	<link rel="stylesheet" type="text/css" href="estilo/layout.css"/>
	<link href="https://fonts.googleapis.com/css?family=News+Cycle|Patua+One&display=swap" rel="stylesheet">
</head>
<body>
	
	<?php
		include("todos/header.php");
	?>

	<article class="col-12 col-m-12 col-x-12">
		<p>PESQUISA, EXTENSSÃO, DESENVOLVIMENTO...</p>
		<h1>Explore o Conhecimento!</h1>
	</article>

	<main class="col-12 col-m-12 col-x-12 magem">

		<a href=""><aside class="col-3 col-m-3 col-x-3 materia"><h1>Português</h1></aside></a>
		<a href=""><aside class="col-3 col-m-3 col-x-3 materia"><h1>História</h1></aside></a>
		<a href=""><aside class="col-3 col-m-3 col-x-3 materia"><h1>Informática</h1></aside></a>
		
		<h1 id="h1estilo" class="col-11 col-m-11 col-x-11">----------- TOP 3 MAIS VISTOS ----------</h1>
		<a href=""><aside class="col-3 col-m-3 col-x-3">
			<p class="box">1º</p>
			<h1>Feminismo nas escolas</h1>
			<p class="pAside">Elabora meios de ensinar o significado de empoderamento para meninas.</p>
			<p class="p2">Beatriz Oliveira e Amanda Rodrigues</p>
		</aside></a>

		<a href=""><aside class="col-3 col-m-3 col-x-3">
			<p class="box">2º</p>
			<h1>Racismo no século XX</h1>
			<p class="pAside">O artigo aborda o racismo nos EUA no século XX.</p>
			<p class="p2">Natália Flores e Pedro Mietlick</p>
		</aside></a>

		<a href=""><aside class="col-3 col-m-3 col-x-3">
			<p class="box">3º</p>
			<h1>Letras de Rap e Funk</h1>
			<p class="pAside">Identifica quais as principais caracteristicas das letras de rap e funk.</p>
			<p class="p2">Rafaella Vargas e Anastácia Severo</p>
		</aside></a>
	</main>

		</aside>

	<?php
		include("todos/footer.php");
	?>
</body>
</html>