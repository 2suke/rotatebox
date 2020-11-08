<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
	<h3>all cards</h3>	
		<a href="/cards/create.php">新規登録</a>
		<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>delete</th>
		</tr>
		<?php
			foreach ($cards as $card) {
				include $_SERVER['DOCUMENT_ROOT'].'/../include/view/partial/card_table.php';
			}
		?>
		</table>
	</body>
</html>
