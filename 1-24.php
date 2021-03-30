#新しくtxtファイルを作る作業（同サイト内に作成される）<br>
#そのファイルの中身は$x<br>
#このファイルを再生すると、書き込み成功　と出てくる。<br>
#$filenameがtxtのファイル名<br>
#fopen("開きたいファイル名","オープンモード"<br>
#fwrite(fopen関数,ファイルの中身である$x)←よくわからん。<br>
#fclose(fopen関数）←よくわからん<br>
#オープンモードがaを実行するとwの下に出てくる<br>
#PHP_EOLとは
#最後に、再生した時に出てくる文字をechoの後に打つ<br><br>




<?php
  $x="Hello World".PHP_EOL;
  $filename = "misson1_24.txt";
  $fp=fopen($filename, "a");
  fwrite($fp,$x);
  fclose($fp);
  echo "書き込み成功"?>