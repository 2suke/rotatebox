<?php
require("db/data_access/data_access.php");

class CardAccesser extends DataAccesser {
    function getAllCards(){
        $dbh = $this->dbConnect();
        $command = "SELECT * FROM card";
        $res = $dbh->query($command);

        $this->dbClose();

        return $res;
    }

    function getCardDetail($id){
        $dbh = $this->dbConnect();
        $command = "SELECT * FROM card WHERE id=$id";
        $res = $dbh->query($command);
        
        return $res->fetch();
    }

    function setNewCard(){
        $dbh = $this->dbConnect();
        $command = "SELECT * FROM card";
        $res = $dbh->query($command);

        $this->dbClose();
    }
}
?>