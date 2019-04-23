<?php require '../header.php' ?>
<p>請選擇訂購數量</p>
<form action="selecet-for-out_copy" method="post">
  <select name="count">
    <?php  
    $i=1;
    while ($i< 10) {
      // echo "<option value=$i>$i</option>";
      echo '<option value='."$i".'>'."$i".'</option>';//
      // echo "<option value=$i>$i</option>";
      //反正怎麼括都可以 但看起來上面的方法比較簡單啊
      $i++;
    }
    ?>
    
  </select>

</form>
<?php require '../footer.php' ?>