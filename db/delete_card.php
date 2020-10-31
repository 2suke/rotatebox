<?php
    require dirname(__FILE__)."/data_access/cards.php";

    $dbh = new CardAccesser();
    $dbh->deleteCard($_GET['id']);

    header('Location: ../index.php');
    exit();
?>