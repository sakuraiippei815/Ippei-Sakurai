<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>misson3-3</title>
    </head>
    <form action="" method="post">
       <br>
        <input type ="text" name="name" placeholder="名前" >
        <input type ="text" name="com" placeholder="コメント">
        <input type="submit" name="submit">
    </form>
    <form action="" method="post">
        <br>
        <input type ="text" name="del" placeholder="削除番号">
        <input type="submit" name="delate">
    </form>
    <body>
    <?php 
        $name = $_POST["name"];
        $com = $_POST["com"];
        $del = $_POST["del"];
        $date = date("Y年m月d日 H時i分s秒");
        $filename="3-3.txt";
        $fp=fopen($filename,"a");
                $lines = file($filename,FILE_IGNORE_NEW_LINES);
                //txtの行ごとを配列にしている
        $num = end($lines);
                //右辺は、endが一番最後の配列（行全体が投稿行の何番目か）をとってくる
                //左辺は、配列の0番目の要素
        
       
        
         
        if($name!=null && $com!=null)//$nameと$comが存在するのならばの条件文
           
            {
            if(file_exists($filename))//この一文がないと、１１２３ってなる
            {
                $num =$num[0] +1;//上記で行すべてをとっていた$numを上書き。
                                 //$numの⓪番目の要素＋１が$numになるようにした。
           
                
            }    
                
            else{
                $num=1;
                }//fileが存在していないときに書き込んだ時、1行目に書けばいい。最初だけ適応。
            
            
            
            $I = $num."<>".$name."<>".$com."<>".$date;
            $fp=fopen($filename,"a");
            fwrite($fp, $I."\n");
            fclose($fp);
            
            
                    
                    
            }
        
        if($del!=null)//$delに数字が入っていたら
            {   $Q=0;//
                $file = file($filename);//file全体を読み込んでいるｂ
                foreach($file as $lines)//file全体から一行ずつ読み込んでる。
                {
                    $A= explode("<>",$lines);//txtには＜＞があるからそれなくす。
                    if($del==$A[0])//delと⓪番目が一致したら。
                        {
                            unset($file[$Q]);//Qはforeach文が繰り返されている数。//ファイルのQ番目を消す処理
                            file_put_contents($filename,$file);
                        }
                 $Q=$Q+1;
                }
            }
            
            
            
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            foreach($lines as $line)
                {$line = explode("<>",$line);
                foreach($line as $word)//テキストの配列$linesを$lineという関数にし
                                    //explodeされた$lineを$wordとした処理。
                    {echo $word ;}//Aの前にbrつけると要素ごと改行されてしまう。
                echo "<br>";
                }
            
        //消したい番号より+１多い番号が消えてるのでunsetにー１
        
          
    ?>
    
</body>
</html>