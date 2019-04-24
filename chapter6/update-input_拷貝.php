<?php require '../header.php'; ?>
<table>
<tr><th>商品編號</th><th>商品名稱</th><th>商品價格</th></tr>
<form>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'password');
	foreach ($pdo->query('select * from product') as $row) {
		echo '<tr>';
		echo '<input type="'.'hidden" name="'.'id" value=$row["'.'id"]>';
		echo "<td>$row[id]</td>";
		echo '<td><input type="'.'text" name="'.'id" value=$row["'.'name"]></td>';
		echo '<td><input type="'.'text" name="'.'id" value=$row["'.'price"]></td>';
	}

?>	
</form>

</table>
<?php require '../footer.php'; ?>


<!-- <form action="update-output_拷貝.php" method="post">
	<tr>
		<td><input type="hidden" name="id" value="1"></td>
		<td>1</td>
		<td><input type="text" name="name" value="apple"></td>
		<td><input type="text" name="price" value="100"></td>
	</tr>
</form>
 -->