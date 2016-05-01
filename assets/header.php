<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="icon" type="icon" href="img/main/favicon.ico">

		<title><?=ucfirst(str_replace('_', ' ', $_GET['page'])) ?></title>

	</head>

	<body>

		<header>

			<a href="?page=home"><h1>Gothic Demo</h1></a>

			<nav>

				<ul>

					<li><a href="?page=home">Frontpage</a></li>
					<li><a href="?page=history">History Archive</a></li>
					<li><a href="?page=about">About</a></li>
					<li><a href="?page=contact">Contact</a></li>

				</ul>

			</nav>

		</header>