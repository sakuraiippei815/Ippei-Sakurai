#ファイル内に数字が表示されてしまい、fizzbuzz1が表示されない。
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset ="UTF-8">
        <title>"misson1-27</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="number" name="x" 
                placeholder="数字を入力してください">
            <input type="submit" name="submit">
            </form>
     
     <?php
     //txtを作る操作、サイトに書き込む操作
       $number = $_POST["x"];
       
        //サイトについての操作
      if
         ($number%3 ==0 && $number%5 ==0)
         {$y="FizzBuzz";}//この言語は$yを先に定義しなくてもいい。
        
       elseif
         ($number%3==0)
         {$y= "Fizz";}
       elseif
         ($number%5==0)
         {$y="Buzz";}
       else
         {$y=$number;}
       echo $y;//ここで送信結果が表示されるようになるコードを書く
         
      
      $y=$y.PHP_EOL;//$yがサイトでの送信結果。それを上書きした形でテキストに移す。
                    //つまり、サイトでの送信結果とテキストでの送信結果を同じにした
                    //PHP_EOLはテキスト内で改行してくれる役割。
      $filename="misson1-27.txt";
      $fp=fopen($filename,"a");
      fwrite($fp,$y);//$fpってファイルに$yを書き込む
      fclose($fp);//$fpってファイルを閉じる
       echo "書き込み成功<br>";
      ?>
         
      
    </body>
</html>
#ミスったやつ

<!-- #ファイル内に数字が表示されてしまい、fizzbuzz1が表示されない。-->
<!--<!DOCTYPE html>-->
<!--<html lang="ja">-->
<!--    <head>-->
<!--        <meta charset ="UTF-8">-->
<!--        <title>"misson1-27</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <form action="" method="post">-->
<!--            <input type="number" name="x" -->
<!--                placeholder="数字を入力してください">-->
<!--            <input type="submit" name="submit">-->
<!--            </form>-->
     
<!--     -->
     <!--//txtについての操作-->
<!--      $number = $_POST["x"];-->
      
<!--      $x=$number.PHP_EOL;-->
<!--      $filename="misson1-27.txt";-->
<!--      $fp=fopen($filename,"a");-->
<!--      fwrite($fp,$x);-->
<!--      fclose($fp);-->
<!--      echo "書き込み成功<br>";-->
      
      <!--//サイトについての操作-->
<!--      if-->
<!--         ($number%3 ==0 && $number%5 ==0){echo "FizzBuzz<br>";}-->
<!--       elseif-->
<!--         ($number%3==0){echo "Fizz<br>";}-->
<!--       elseif-->
<!--         ($number%5==0){echo "Buzz<br>";}-->
<!--       else-->
<!--         {echo $number;}-->
         
         
<!--         if-->
<!--         ($x%3 ==0 && $number%5 ==0){echo "FizzBuzz<br>";}-->
<!--       elseif-->
<!--         ($x%3==0){echo "Fizz<br>";}-->
<!--       elseif-->
<!--         ($x%5==0){echo "Buzz<br>";}-->
<!--       else-->
<!--         {echo $x;}-->


      <!--//txtについての操作-->
<!--      if(file_exists($filename))-->
<!--      {$lines=file($filename.FILE_IGNORE_NEW_LINES);-->
<!--          foreach($lines as $line)-->
<!--          {echo $line."<br>";}-->
<!--         }-->
        
<!--       ?>-->
      
<!--    </body>-->
<!--</html>-->