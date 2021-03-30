<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>misson3-4</title>
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
    </form>
    <form action="" method="post">
        <br>
        <input type ="text" name="edi" placeholder="編集対象番号">
        <input type ="text" name="name2" placeholder="名前" >
        <input type ="text" name="com2" placeholder="コメント">
        <input type="submit" name="edit">
    </form>
    <body>
    <?php 
        $name = $_POST["name"];
        $com = $_POST["com"];
        $del = $_POST["del"];
        $edi = $_POST["edi"];
        $name2 = $_POST["name2"];
        $com2 = $_POST["com2"];
        $date = date("Y年m月d日 H時i分s秒");
        $filename="3-4.txt";
        $filename2="3-4.1.txt";
        $fp=fopen($filename,"a");
        $lines = file($filename,FILE_IGNORE_NEW_LINES);
        $lines2 = file($filename2,FILE_IGNORE_NEW_LINES);
        $num = end($lines);
        
        
                
        
              
       
         if($name!=null && $com!=null)
            {
            if(file_exists($filename))
            {
                $num =$num[0] +1;
            }    
                
            else{
                $num=1;
                }
            
            
            
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
            
            
                    //編集番号が入っていた時の処理
        
        if($edi!=null && $name2!=null && $com2!=null)
             {  
                
                $R=0;
                $file = file($filename);
                $lines = file($filename,FILE_IGNORE_NEW_LINES);//テキストファイルを読み込む
                foreach($file as $lines)
                {
                    
                    $A= explode("<>",$lines);

                    if($edi==$A[0])
                        {
                            $lines = file($filename,FILE_IGNORE_NEW_LINES);//テキストファイルを読み込む
                            $lines2 = file($filename2,FILE_IGNORE_NEW_LINES);
                            $I2=$edi."<>".$name2."<>".$com2."<>".$date."<>"."☆";
                            $lines[$R]=$I2;
                            unlink($filename);
                            foreach($lines as $line)
                                {
                                    $fp=fopen($filename,"a");
                                    fwrite($fp, $line."\n");
                                   
                                    
                                      
                                }
                            fclose($fp);//foreachの外に出さんでも行ける。
                            $fp2=fopen($filename2,"a");
                            fwrite($fp2, $I2."\n");
                            fclose($fp2);
                            
                            
                           
                        }
                 $R=$R+1;
                }
            }
            
            // {   
            //     $R=0;
            //     $I2=$edi."<>".$name2."<>".$com2."<>".$date;
            //     $fp2=fopen($filename2,"a");
            //     fwrite($fp2, $I2."\n");
            //     fclose($fp2);
            //     $file2=file($filename2);
                
            //     foreach($file2 as $lines2)
            //     {
            //         $line2= explode("<>",$lines2);
                    
            //         if($edi==$A[0])
            //             {
                            
            //               $B= str_replace($file[$Q],"☆".$file2[$R],$word);
            //               echo $B;
            //             }
                    
            //     }
            // $R=$R+1;
            // }
            
            
            
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