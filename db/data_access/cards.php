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
}
?>