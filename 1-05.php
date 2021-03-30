#htmlとphpの違いはここに掲載されてるよ→https://tech-camp.in/note/technology/55926/<br>
#phpとhtmlを混ぜた簡単な文章<br>

私の<br>名前は<br><?php echo "櫻井<br>";?>逸平<br>です<br>
私の<br>名前は<br><?php echo "櫻井";?>逸平<br>です<BR>
    
#ちょっと複雑（こっちでこれからやる）
#html lang ="ja"ってなに？？
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-05</title>
</head>
<body>
   あいうえお<br>
    かきくけこ<br>
    <?php
       echo "さしすせそ";
         echo "<br>";?>
         たちつてと<br>
         なにぬねの<br>
</body>
</html>