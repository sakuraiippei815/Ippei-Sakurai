#{}の中に(br)を入れることにより、文字が段落ごとに表示される。<br>
#2つ目のように変数にせず、?php for()で初めても成功した。<br>
#}の後のセミコロンをつけなくても成功した。<br>
#（）と{}の間にセミコロンを入れると、表示はされるが一回しか表示されなかった<br>


<?php
  for($i=1;$i<=100;$i=$i+1);{echo "パワー";}?>


<?php
  $x="！";for($i=1;$i<=100;$i=$i+1){echo $x;};?>