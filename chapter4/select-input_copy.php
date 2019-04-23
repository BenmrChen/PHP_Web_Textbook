<?php require '../header.php' ?>
<p>請指定座位</p>
<form action="select-output_copy.php" method="post">
  <select name="seat">
    <option value="自由座" checked>自由座</option>
    <option value="指定席">指定席</option>
    <option value="商務艙">商務艙</option>
  </select>
  <br>
  <br>
  <input type="submit" value="確認">
</form>
<?php require '../footer.php' ?>
<!-- 
  <input type="select" name="seat" value="自由座">'自由座'
  <input type="select" name="seat" value="指定座位">'指定座位'
  <input type="select" name="seat" value="商務倉">'商務倉'
  <input type="submit" value="確認"> -->