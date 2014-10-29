<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$tv = new Television();
$tv->setChannel(5);

class Television{
  public $channelNo;

  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }

  function setChannel($channel){
    $this->channelNo = $channel;
    $this->dispChannel();
  }
}

?>
</body>
</html>
