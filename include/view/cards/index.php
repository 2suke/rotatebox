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
				echo "<tr>";
				echo "<td>$card[id]</td>";
				echo "<td><a href=\"/cards/detail.php?id=$card[id]\">$card[name]</a></td>";
				echo "<td><a href=\"/cards/delete.php?id=$card[id]\">delete</a></td>";
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>
