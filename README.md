# 環境構築方法（ローカル）

## 動作環境
windows 10

## xampp設定
xampp: https://www.apachefriends.org/jp/download.html
「7.4.11 / PHP 7.4.11」をインストール

### xampp設定
/xampp/apache/conf/httpd.conf を編集しdocrootを変更する。  

変更前  
```
DocumentRoot "C:/xampp/htdocs"
```

変更後  
```
DocumentRoot "C:/xampp/rotatebox/htdocs"
```  

xampp配下にrotateboxをクローンする。

## ローカルアクセス
ブラウザに http://localhost を入力  
Chromeを推奨  
