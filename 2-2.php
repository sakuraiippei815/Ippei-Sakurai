<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>misson2-1</title>
    </head>
    <form action"" method="post">
        #getは、例えばTxtとかからデータを受け取る際に使う<br>
        <input type ="text" name="x" >
        <input type="submit" name="submit">
    </form>
    <body>
    <?php 
      $str = $_POST["x"];
      
      if($str=="完成！")
        {$x="おめでとう！！";}
      elseif($str=="")
        {$x="error";}
      else
        {$x=$str;}
      echo $x;
      
      //txtの操作
      if ($x!="error")//errorじゃないときって意味
      {$x=$x;
      $filename="misson2-2.txt";
      $fp=fopen($filename,"a");
      fwrite($fp,$x);
      fclose($fp);}
      
      ?>
      </body>
      </html>