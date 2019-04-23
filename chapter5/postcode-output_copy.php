<?php require '../header.php'; ?>
<?php
if (preg_match('/^[0-9]{7}$/',$_REQUEST['postcode']) {
  echo '正確';
} else {
  echo '錯誤';
}


?>
<?php require '../footer.php'; ?>
