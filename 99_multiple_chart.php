<?php 
for ($i=1; $i<10 ; $i=$i+3) {
  for ($j=1; $j<10 ; $j++) { 
    echo $i.'x'.$j.'='.$i*$j."\t",$i+1,'x'.$j.'='.($i+1)*$j."\t".($i+2).'x'.$j.'='.($i+2)*$j."\n"; 
  }
  echo "\n";
}

 ?>

 