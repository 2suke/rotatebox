<?php
	require("db/data_access/cards.php");

	$id = $_GET['id'];
	$dao = new CardAccesser();
	$card = $dao->getCardDetail($id);
	var_dump($card);
?>
<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
		<?php
			echo "<h3>$card[name]</h3>";
			echo "<p>id: ".$_GET['id']."</p>";
		?>
		<a href="index.php">home</a>
	</body>
</html>
