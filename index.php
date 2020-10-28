<html>
 <head>
  <title>Rotatebox</title>
 </head>
 <body>
 <?php
    $link = mysqli_connect('localhost', 'takezawa', 'sekkapy0401', 'rotate_box');

    // 接続状況をチェックします
    if (mysqli_connect_errno()) {
        die("データベースに接続できません:" . mysqli_connect_error() . "\n");
    } else {
        echo "データベースの接続に成功しました。\n";
    }
 ?> 
 </body>
</html>
