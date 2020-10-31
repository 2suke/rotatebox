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
		?>
		<a href="index.php">home</a>

        <form action="db/update_card.php" method="post">
            <input type="hidden" name="id" value=<?php echo $id ?>>
            <label>カード名</label>
            <input type="text" name="name" id="card-name" value=<?php echo $card['name']?>>

            <input type="submit" value="更新する">
        </form>
	</body>
</html>
