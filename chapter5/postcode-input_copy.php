<?php require '../header.php'; ?>
<p>請輸入7碼郵遞區號（不需「-」分隔）：</p>
<form action="postcode-output_copy2.php" method="post">
  <input type="text" name="postcode"> <!-- 把這邊input的內容放在名為postcode的request參數裡(書裡說的是request參數名為postcode) -->
  <p>
  <input type="submit" value="確認">  
</form>
<?php require '../footer.php'; ?>
