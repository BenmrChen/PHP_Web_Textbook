<?php require 'header.php' ?>

<?php 
for ($i=1; $i< 10 ; $i++) { 
  for ($j=1; $j< 10 ; $j++) { 
    echo $i.'X'.$j.'='.$i*$j.\n;
  }
  echo '<br>';
}

 ?>

<?php require 'footer.php' ?>