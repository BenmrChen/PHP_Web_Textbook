<?php require '../header.php'; ?>
  <?php 
  // $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');
  // // echo '<ul>';
  // foreach ($pdo->query('select * from product') as $row) {
  //   echo '<li>';
  //   echo $row['id'].': ' ;
  //   echo $row['name'].', ';
  //   echo $row['price'].'<br>';
  //   echo '</li>';
  // }
  // echo '</ul>';

  // foreach ($pdo->query('select * from product') as $row) {
  //   echo "ID: $row[id], Product Name: $row[name], Price: $row[price]<br>";//這個是上面的簡化寫化
  // }
  ?>
<table>
<tr>
  <td>No.</td>
  <td>Name</td>
  <td>Price</td>
</tr>

<?php
  $pdo = new PDO('mysql:host=localhost; dbname=shop; charset=utf8', 'staff', 'password');
  
  // foreach ($pdo->query('select * from product') as $row) {
  //   echo '<tr>';
  //   echo 
  //     "<td>$row[id]</td>
  //     <td>$row[name]</td>
  //     <td>$row[price]</td>";
  //   echo "<tr>";
  // }  
  //上面兩個的更簡化寫法

  foreach ($pdo->query('select * from product') as $row) {
    echo '<tr>';
    echo '<td>'.htmlspecialchars($row['id']).'</td>';
    echo '<td>'.htmlspecialchars($row['name']).'</td>';
    echo '<td>'.htmlspecialchars($row['price']).'</td>';
    echo '</tr>';
  }
//加入function: htmlspecialchars，可以把html裡有意義的的字失去原本的字義
?>

</table>



<?php require '../footer.php' ?>