<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$tv = new Television();

$tv->setChannel(20);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

$tv->setChannel(10);
print('現在のチャンネルは'.$tv->getChannel().'<br>');

class Television{
  private $channelNo = 8;

  function setChannel($channel){
    if (($channel >= 1) and ($channel <= 12)){
      $this->channelNo = $channel;
    }else{
      print('チャンネルは1から12の間で設定して下さい<br>');
    }
  }

  function getChannel(){
    return $this->channelNo;
  }
}

?>
</body>
</html>
