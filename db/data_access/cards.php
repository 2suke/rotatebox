<?php
require(dirname(__FILE__)."/data_access.php");

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
        $this->dbClose();

        return $res->fetch();
    }

    function updateCard($param){
        $dbh = $this->dbConnect();
        $command = "UPDATE card SET ";
        foreach($param as $key => $value){
            if($key == "id") {
                $id = $value;
            } else {
                $command .= "$key='$param[$key]', ";
            }
        }
        $command = substr($command, 0, -2);
        $command = $command." WHERE id='$id'";
        var_dump($command);
        $res = $dbh->query($command);
        $this->dbClose();
    }

    function setNewCard(){
        $dbh = $this->dbConnect();
        $command = "SELECT * FROM card";
        $res = $dbh->query($command);

        $this->dbClose();
    }
}
?>