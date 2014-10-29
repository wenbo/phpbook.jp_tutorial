<?php
$flag = setcookie("visited", 1);
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
if ($flag){
  print('<p>クッキーを書き込みました</p>');
}else{
  print('<p>クッキーの書き込みに失敗しました</p>');
}
?>

</body>
</html>
