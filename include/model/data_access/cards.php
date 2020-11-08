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

    function createNewCard($param){
        $dbh = $this->dbConnect();
        
        $command = "INSERT INTO card ";
        $columns = "";
        $values  = "";
        foreach($param as $key => $value){
            $columns .= "$key, ";
            $values  .= "'$value', ";
        }
        $columns = substr($columns, 0, -2);
        $values  = substr($values,  0, -2);
        $command = "$command ($columns) VALUES ($values)";

        $res = $dbh->query($command);
        $new_card_id = $dbh->lastInsertId();

        $this->dbClose();

        return $new_card_id;
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
        $dbh->query($command);
        $this->dbClose();
    }

    function deleteCard($id){
        $dbh = $this->dbConnect();
        $command = "DELETE FROM card WHERE id='$id'";
        $dbh->query($command);
        $this->dbClose();
    }
}

?>