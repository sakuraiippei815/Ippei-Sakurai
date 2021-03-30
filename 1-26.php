#misson1_24,txtの中身がサイトにも反映される<br>

<?php 
  $x="皆さんこんにちは".PHP_EOL;
  $filename="misson1_24.txt";
  $fp=fopen($filename,"a");
  fwrite($fp,$x);
  fclose($fp);
  echo "書き込み成功！！";
  
  if(file_exists($filename))
  {$lines = file($filename);
    foreach($lines as $line){
        echo $line . "<br>";}
   }?>