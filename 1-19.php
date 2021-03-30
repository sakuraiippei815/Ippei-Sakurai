#for(){}←の中にIf文を入れる。<br>
#ifの前にechoを入れたら失敗した。<br>
#forの()と{}の間にセミコロンを入れても大丈夫。<br>
#ifの（）と{}の間にセミコロンを入れたら失敗した<br>


<?php
     for($i=0;$i<100;$i=$i+1)
     {if($i%3==0 && $i%5==0){echo "FizzBuzz<br>";}
      elseif($i%3==0){echo "Fizz<br>";}
      elseif($i==0){echo"0";}
      elseif($i%5==0){echo"Buzz<br>";}
      else{echo "$i<br>";}}?>