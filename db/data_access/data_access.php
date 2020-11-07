<?php

class DataAccesser {
  protected $dbh;
  private $dbName;
  private $dbHost;
  private $dbUser;
  private $dbPassword;

  public function __construct() {
    $config = include(__DIR__."/../../config.php");
    $this->dbName = $config['DB_NAME'];
    $this->dbHost = $config['DB_HOST'];
    $this->dbUser = $config['DB_USER'];
    $this->dbPassword = $config['DB_PASSWORD'];
  }
  
  function dbConnect(){
    $dsn = "mysql:dbname=".$this->dbName.";host=".$this->dbHost;
    $user = $this->dbUser;
    $password = $this->dbPassword;

    try {
      $dbh = new PDO($dsn, $user, $password);
      return $dbh;
    } catch (PDOException $e) {
      echo "接続失敗: " . $e->getMessage() . "\n";
      exit();
    }
  }

  function dbClose(){
    $dbh = null;
  }
}
?>