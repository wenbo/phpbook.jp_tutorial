<?php
session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php

if (!isset($_SESSION["visited"])){
  print('初回の訪問です。セッションを開始します。');

  $_SESSION["visited"] = 1;
  $_SESSION["date"] = date('c');
}else{
  $visited = $_SESSION["visited"];
  $visited++;

  print('訪問回数は'.$visited.'です。<br>');

  $_SESSION["visited"] = $visited;

  if (isset($_SESSION["date"])){
    print('前回の訪問日時は'.$_SESSION["date"].'です。<br>');
  }

  $_SESSION["date"] = date('c');
}

?>
<p>
セッションを開始したら、サーバ側に値を保存することが出来ます。クライアント毎に色々な値が書き込まれますが、セッションIDを識別子としてどのクライアントが保存した値かは識別できるようになっています。
</p>
</body>
</html>
