#倍数は数字の前に%つける<br>
#$number%3==0は、変数は3の倍数<br>
#(br)を{}の外に出し、echo (br)とするとエラーが発生した.<br>
#"文字（br)"の(br)を抜かしても正常に機能した。<br>
#()と{}の間にセミコロンを入れると失敗した。<br>


<?php
       $number=5;if($number%3==0 && $number%5== 0){echo "FizzBuss<br>";}
                 elseif($number%3==0){echo "FIzz<br>";}
                 elseif($number%5==0){echo "Buzz<br>";}
                 else{echo "✕<br>";}?>