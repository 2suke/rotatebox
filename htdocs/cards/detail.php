<?php
	require $_SERVER['DOCUMENT_ROOT'].'/../include/model/data_access/cards.php';

	$id = $_GET['id'];
	$dao = new CardAccesser();
    $card = $dao->getCardDetail($id);
    
    include_once $_SERVER['DOCUMENT_ROOT'].'/../include/view/cards/detail.php';
?>