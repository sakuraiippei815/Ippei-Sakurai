#foreach関数はarrayの配列を変数として扱うようにする役割<br>
#foreach($1 as$2){}<br>


<?php $x=array
      ("Ken","Alice","judy","BOSS","Bob");
      
     foreach($x as $y)
     {
         if($y=="BOSS"){echo "Good Morning　".$y."<br>";}
      else{echo"Hi!".$y."<br>";}
     
     
      
     };?>