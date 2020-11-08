<?php
    require $_SERVER['DOCUMENT_ROOT'].'/../include/model/data_access/cards.php';

    $dbh = new CardAccesser();
    $dbh->deleteCard($_GET['id']);

    header("Location: ../index.php");
    exit();
?>