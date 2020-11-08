<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
		<h3><?php echo $card['name'] ?></h3>
		<p>id: <?php echo $_GET['id'] ?></p>
		<p>name: <?php echo $card['name'] ?></p>

		<a href="/cards/edit.php?id=<?php echo $id ?>">edit</a>
		<a href="/">home</a>
	</body>
</html>
