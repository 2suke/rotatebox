<?php
    require dirname(__FILE__)."/data_access/cards.php";

    $dbh = new CardAccesser();
    $dbh->updateCard($_POST);

    header('Location: ../index.php');
    exit();
?>