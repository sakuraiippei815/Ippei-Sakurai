#form actionの中身は""のみ。methodはpostにする<br>

#input typeの一つ目はtextとかnumberとかの文字の形式を指定するもの。
nameはphp内の$_POST関数の中身に使うもの<br>

#input typeの二つ目はsubmitで送信ボタンを作る役割。nameもsubmit<br>

#2行目のhtmlをhtml lang="ja"にすることによりどうなるのか<br>

#htmlの中身にphpを組み込むことによって何が起きているのか。
phpのみとhtml含んだ時の違いが分からない<br>

<!DOCTYPE html>
<html>
    <head>
    <meta charset ="cn-big5" />
    <title>"misson1-20"</title>
    </head>
    <body>
        <form action="" method="post">
        <input type="text" name="str">
        <input type="submit" name="submit">
    </form>
    <?php $str = $_POST["str"];echo $str;?>
    </body>
</html>