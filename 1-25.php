#オープンモードwを実行するとaが消える。<br>
#裏の作業だからhtmlは必要ない<br>
<?php
  $x="こんにちは世界".PHP_EOL;
  $filename = "misson1_24.txt";
  $fp=fopen($filename, "w");
  fwrite($fp,$x);
  fclose($fp);
  echo "書き込み成功"?>