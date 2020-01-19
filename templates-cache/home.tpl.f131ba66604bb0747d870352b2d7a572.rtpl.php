<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Page Title -->
	<title>HTML5 SAMPLE</title>

	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

	<!-- CSS Integrated -->
	<style>
		body {margin: 0px; padding: 0px; border: none;}
		strong {color: #FF0000; font-weight: bold; font-size: 15px;}
		header, nav, main, article, footer {padding: 5px; margin: 5px;}
		header {border: solid #FF0000 2px; background-color: #BABABA;}
		nav {border: solid #00FF00 2px; background-color: #FAB0FD;}
		main {border: solid #80F090 2px; background-color: #EAFF01;}
		aside {border: solid #99F090 2px; background-color: #0EFF01;}
		section {border: solid #000000 2px; background-color: #00F8A0;}
		article {border: solid #F0F0FF 2px; background-color: #F91AD0;}
		footer {border: solid #FF00FF 2px;background-color: #307AF0;}
		div {clear:both;}
	</style>
	
</head>
<body>
	<!-- HEADER HTML5 -->
	<header class="panel panel-primary">
		<h1 class="panel-heading">Header Name</h1>
		<div class="panel-body">Panel Body</div>
	</header>
 
	<main class="panel panel-warning">
		<h1 class="panel-heading">Main Name</h1>
		<div class="panel-body">Panel Body</div>
	
		<aside class="panel panel-info col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<h1 class="panel-heading">Aside Name</h1>
			<div class="panel-body">Panel Body</div>
	
		</aside>

		<section class="panel panel-default col-sm-12 col-md-12 col-lg-8 col-xl-8">
			<h1 class="panel-heading">Section Name</h1>
			<div class="panel-body">Panel Body</div>
	
			<header class="panel panel-success">
				<h1 class="panel-heading">Sub Header Name</h1>
			</header>

			<article class="panel panel-danger">
				<h1 class="panel-heading">Article Name</h1>
			</article>

			<footer class="panel panel-warning">
				<h1 class="panel-heading">Sub Footer Name</h1>
			</footer>

		</section>
		<div></div>

	</main>

	<footer class="panel panel-success">
		<h1 class="panel-heading">Footer Name</h1>
		<div class="panel-body">Panel Body</div>
	</footer>
</body>
</html>
