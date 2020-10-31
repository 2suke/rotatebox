<?php
	require(dirname(__FILE__)."/db/data_access/cards.php");

	$id = $_GET['id'];
	$dao = new CardAccesser();
	$card = $dao->getCardDetail($id);
?>
<html>
	<head>
		<title>Rotatebox</title>
	</head>
	<body>
		<?php
			echo "<h3>$card[name]</h3>";
			echo "<p>id: ".$_GET['id']."</p>";
			echo "<p>name: ".$card['name']."</p>";
		?>
		
		<a href="edit.php?id=<?php echo $id ?>">edit</a>
		<a href="index.php">home</a>
	</body>
</html>
