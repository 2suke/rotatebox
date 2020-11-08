<?php
class Card {
    private $name;
    private $manacost;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}
?>