<?php require '../header.php'; ?>
<p>請選擇分店：</p>
<form action="store-output_.php" method="post">
  <select name="code">
    <?php  
    $store=[
      '北車'=>101, '板橋'=>102, '松山'=>103
    ];
    foreach ($store as $key => $value) {
      echo "<option value='$value'>$key</option>";
      // echo '<option value="'.'$value"'.'>'.$key.'</option>';
      // echo '<option value='."$value".''>'.$key.'</option>'; /這個不知道為啥不行
    }
    ?>
  </select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>
