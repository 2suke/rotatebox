<?php
    require dirname(__FILE__)."/data_access/cards.php";

    $dbh = new CardAccesser();
    $new_id = $dbh->createNewCard($_POST);

    header("Location: ../detail.php?id=$new_id");
    exit();
?>