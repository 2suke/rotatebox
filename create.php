<?php
    require(dirname(__FILE__)."/db/data_access/data_access.php");
?>
<html>
    <head>
        <title>Rotatebox</title>
    </head>
    <body>
        <h3>新規登録</h3>
        <form action="db/create_card.php" method="post">
            <label>カード名</label>
            <input type="text" name="name"><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>