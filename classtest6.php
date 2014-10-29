<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$tv1 = new Television();
print('現在のチャンネルは'.$tv1->getChannel().'<br>');

class Television{
  private $channelNo;

  function __construct(){
    $this->channelNo = 8;
  }

  function getChannel(){
    return $this->channelNo;
  }
}

?>
</body>
</html>
