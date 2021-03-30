#placeholderは薄い字、valueは実際に最初に打ってある文字<br>
#を受け付けました　という文がコメントを打つ前に表示されているがどうにかなるのか
<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>misson2-1</title>
    </head>
    <form action"" method="post">
        <input type ="text" name="str" value="コメント">
        <input type="submit" name="submit">
    </form>
    <?php 
     $x="を受け付けました";
     
     $str = $_POST["str"]; 
        echo $str.$x;?>
</html>