<?php
session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
print('セッション変数の確認をします。<br>');
if (!isset($_SESSION["visited"])){
  print('セッション変数visitedは登録されていません。<br>');
}else{
  print($_SESSION["visited"].'<br>');
}

print('セッションIDの確認をします。<br>');
if (!isset($_COOKIE["PHPSESSID"])){
  print('セッションは登録されていません。<br>');
}else{
  print($_COOKIE["PHPSESSID"].'<br>');
}
?>

<p>
<?php 
print date('c')
?>
<p>
</body>
</html>
