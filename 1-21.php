#どの数字を打っても、FizzBazzにしかならない。←methodとpostに間に=入れ忘れ<dr>
#placeholderは文字を打つところに何を打てばいいのか示す役割<br>
<!DOCTYPE html>
<thml  >
    <head>
        <meta charset ="UTF-8">
        <title>misson1-21</title>
    </head>
    <body>
        <form action="" method="post">
        <input type ="number" name="x" placeholder="数字を入力">
        <input type ="submit" name="submit">
        </form>
    
    
<?php $number = $_POST["x"];
//上はxからデータを受け取るという意味
     if
       ($number%3== 0 && $number%5== 0){echo "FizzBuzz<br>";}
     elseif
       ($number%3==0){echo "Fizz<br>";}
     elseif
       ($number%5==0){echo "Buzz<br>";}
     else
       {echo $number;}?>
         
         </body>
         </html>