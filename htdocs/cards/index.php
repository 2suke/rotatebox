<?php
    require $_SERVER['DOCUMENT_ROOT'].'/../include/model/data_access/cards.php';

	$dao = new CardAccesser();
    $cards = $dao->getAllCards();
    
    include_once $_SERVER['DOCUMENT_ROOT'].'/../include/view/cards/index.php'
?>
