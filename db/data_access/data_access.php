<?php

class DataAccesser {
  protected $dbh;

  function dbConnect(){
    $dsn = 'mysql:dbname=rotate_box;host=localhost';
    $user = 'takezawa';
    $password = 'sekkapy0401';

    try {
      $dbh = new PDO($dsn, $user, $password);
      echo "接続成功\n";
      return $dbh;
    } catch (PDOException $e) {
      echo "接続失敗: " . $e->getMessage() . "\n";
      exit();
    }
  }

  function dbClose(){
    $dbh = null;
    if(is_null($dbh)){
      echo "切断しました";
    }
  }
}
?>