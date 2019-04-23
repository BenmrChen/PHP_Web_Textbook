<?php require '../header.php'; ?>
<?php
  switch ($_REQUEST['seat']) {
    case '指定席':
    echo '請補票100塊';
      break;
    case '商務艙':
    echo '請補票200塊';
      break;
    default:
    echo '請安心上車';
      break;
  }
?>
<?php require '../footer.php'; ?>
