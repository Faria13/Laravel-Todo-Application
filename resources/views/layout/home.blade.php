<!DOCTYPE html>
<html>
<head>
	<title>Todo Application</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
</head>
<style>
	body{
		font-family: 'Montserrat', sans-serif;
	}
</style>
<body>

	<div class="home">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Todo List Application</a>
			</nav>
		</div>

		@yield('content')
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>