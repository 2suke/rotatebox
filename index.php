<?php
		require("db/data_access/cards.php");
?>
<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
	<h3>all cards</h3>
		<table>
		<tr>
			<th>id</th>
			<th>name</th>
		</tr>
		<?php
			$dao = new CardAccesser();
			$cards = $dao->getAllCards();

			foreach ($cards as $card) {
				echo "<tr>";
				echo "<td>$card[id]</td>";
				echo "<td>$card[name]</td>";
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>
