<?php require '../header.php'; ?>

資料查詢:<br>
<form action="insert-output_拷貝.php" method="post">
   商品名稱<input type="text" name="query_name">
   <input type="submit" value="查詢"> 
</form>

<br>

資料新增:<br>
<form action="insert-output_拷貝.php" method="post">
商品名稱<input type="text" name="insert_name">
價格<input type="text" name="price">
<input type="submit" value="確定新增">
</form>
<?php require '../footer.php'; ?>
