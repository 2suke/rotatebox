<?php
    require $_SERVER['DOCUMENT_ROOT'].'/../include/model/data_access/cards.php';

    $dbh = new CardAccesser();
    $dbh->updateCard($_POST);

    header('Location: ./index.php');
    exit();
?>