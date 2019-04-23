<?php require '../header.php'; ?>
<?php 
// echo $_REQUEST['price'], '元X';
// echo $_REQUEST['count'], '個=';
// echo $_REQUEST['price']*$_REQUEST['count'], '元';

$price=$_REQUEST['price'];
$count=$_REQUEST['count'];
echo $price, '元X';
echo $count, '個＝';
echo $price*$count, '元';
 ?>
<?php require '../footer.php'; ?>