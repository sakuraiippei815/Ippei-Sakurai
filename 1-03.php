#ブラウザに表示する場合、html内にphpを入れて作業する<Br>
#phpでも表示されたけど、htmlとセットにすることによってどうなってるの<br>
#↑PHPを使うことによってデータのやり取りとかをする。

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>mission_1-36</title>
</head>
<body>
    <?php
        echo "Hello World";
        echo "<br>";
        echo "こんにちは";
    ?>
</body>
</html>