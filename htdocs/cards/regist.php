<?php
    require $_SERVER['DOCUMENT_ROOT'].'/../include/model/data_access/cards.php';

    echo "create";

    $dbh = new CardAccesser();
    $new_id = $dbh->createNewCard($_POST);

    header("Location: ./detail.php?id=$new_id");
    exit();
?>