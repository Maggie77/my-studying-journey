<?php
  $callback = $_GET["callback"];
  echo $callback . '("来自b.com里的数据")';  //foo('来自b.com里的数据')
?>