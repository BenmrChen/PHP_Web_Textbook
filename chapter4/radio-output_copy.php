<?php require '../header.php' ?>
<?php 
  switch ($_REQUEST['meal']) {
    case '日式套餐':
    echo '<p>你點了小日本</p> 
          <p>所以要給你好棒棒的日本全套</p>';
      break;
    case '西式套餐':
    echo '西式讓你吸一吸';
      break;    
    case '中式套餐':
    echo '中華台北不管是啥都要有個大全餐';
      break;
  }
 ?>

<?php require '../footer.php' ?>