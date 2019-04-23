<?php require '../header.php'; ?>
<p>選一發車站</p>
<form action="store-output_copy_php" method="post">
  <select name="code">
    <option value="100">北車</option>
    <option value="101">板橋站</option>
    <option value="102">松山站</option>
  </select>
  <p><input type="submit" value="確認"></p>
</form>
<?php require '../footer.php'; ?>
