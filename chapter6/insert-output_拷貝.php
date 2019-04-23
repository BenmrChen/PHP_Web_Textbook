<?php require '../header.php'; ?>

<table>


<?php 
  $pdo = new PDO('mysql:host=localhost; dbname=shop; charset=utf8', 'staff', 'password');
  if (isset($_REQUEST['query_name'])) {
    ?>
    <tr>
    <td>No.</td>
    <td>Name</td>
    <td>Price</td>
    </tr>
    <?php 
    $sql = $pdo->prepare('select * from product where name = ?');
    $sql->execute([$_REQUEST['query_name']]);
    // die(var_dump($sql));
    foreach ($sql->fetchAll() as $query_result) {
      echo '<tr>';
      echo '<td>'.$query_result['id'].'</td>';
      echo '<td>'.$query_result['name'].'</td>';
      echo '<td>'.$query_result['price'].'</td>';
      echo '</tr>';
    } 
  } else {
    $sql = $pdo->prepare('insert into product values (null, ?, ?)');
    $sql->execute([$_REQUEST['insert_name'], $_REQUEST['price']]);
    echo "已新增 $_POST[insert_name] 至資料庫";
  }
  


//   $sql = $pdo->prepare('insert into product values (NULL, ?, ?)');
// if ($sql->execute([$_REQUEST['name'],$_REQUEST['price']])) {
//   echo 'succeed';
// } else {
//   echo 'failed';
// }

?>

</table>
 <?php require '../footer.php'; ?>
