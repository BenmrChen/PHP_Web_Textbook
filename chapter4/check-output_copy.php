<?php require '../header.php' ?>
<?php 
if (isset($_REQUEST['mail'])) {
 echo '已訂閱';
} else {
 echo '未訂閱';
}
 ?>
<?php require '../footer.php' ?>