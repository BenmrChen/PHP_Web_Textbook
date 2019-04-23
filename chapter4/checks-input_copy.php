<?php require '../header.php'; ?>
<p>請選擇您想吃的雞排種類：</p>
<form action="checks-output_copy.php" method="post">
  <?php  
  $genre=[
    '無調味', '椒鹽', "香辣", '孜然'
  ];
  foreach ($genre as $item) {
    echo '<input type="checkbox" name="genre[]" value="', $item, '">';
    echo $item;
    echo "<p>";
  };
  // foreach ($genre as $genre) {
  //    echo "<input type='checkbox' name='$genre[]' value='$genre'>";
  //    echo $genre;
      // echo "<input type='checkbox' name=$genere[] value=$item>";
  // };
  ?>
  <input type="submit" name="確認" value="確認">
</form>
<?php require '../footer.php'; ?>

<!-- 怎麼讓第一個預設被選起來? checked -->