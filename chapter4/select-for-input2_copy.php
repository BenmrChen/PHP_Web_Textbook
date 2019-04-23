<?php require '../header.php'; ?>
<p>請選擇訂購數量：</p>
<form action="select-for-output_copy.php" method="post">
<select name="count">
  <!-- <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option> -->
<?php
for ($i=0; $i<10; $i++) {
	// echo '<option value="', $i, '">', $i, '</option>';
  // echo "<option value = '$i'>$i</option>";
  echo "<option value= \"$i\">$i</option>";
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!-- 
單引號裡的: 字串
雙引號裡的: 一般來說是字串，但若包含變數的話則會視為變數處理 
  若裡面有單引號 則單引號裡的變數也會被視為變數-->
