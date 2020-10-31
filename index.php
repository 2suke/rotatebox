<?php
	require(dirname(__FILE__)."/db/data_access/cards.php");

	$dao = new CardAccesser();
	$cards = $dao->getAllCards();
?>
<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
	<h3>all cards</h3>	
		<a href="create.php">新規登録</a>
		<table>
		<tr>
			<th>id</th>
			<th>name</th>
		</tr>
		<?php
			foreach ($cards as $card) {
				echo "<tr>";
				echo "<td>$card[id]</td>";
				echo "<td><a href=\"detail.php?id=$card[id]\">$card[name]</a></td>";
				echo "<td><a href=\"db/delete_card.php?id=$card[id]\">delete</a></td>";
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>
