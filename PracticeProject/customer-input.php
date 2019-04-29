<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
session_start();
$name=$address=$login=$password=''; 
// 先宣告這4個變數為空值 也可以寫成
// $name= '';
// $address= '';
// $login= '';
// $password='';
if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$login=$_SESSION['customer']['login'];
	$password=$_SESSION['customer']['password'];
  echo '您已經登錄，若要修改會員資料，請於下欄中更新並點選"確定"鍵。';
}
echo '<form action="customer-output.php" method="post">';
echo '<table>';
echo '<tr><td>姓名</td><td>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td>地址
</td><td>';
echo '<input type="test" name="address" value="', $address, '">';
echo '</td></tr>';
echo '<tr><td>登入ID</td><td>';
echo '<input type="text" name="login" value="', $login, '">';
echo '</td></tr>';
echo '<tr><td>密碼</td><td>';
echo '<input type="password" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>
<?php require '../footer.php'; ?>
