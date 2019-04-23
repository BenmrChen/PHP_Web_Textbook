<?php require '../header.php'; ?>
<?php
// echo '<img src="item', rand(0, 2), '.png">';
// echo '<img src="item0.png">'; 要做兩件事 一個是用echo包 一個是用rand
echo '<img src="item'.rand(0, 2).'.png">';

?>
<?php require '../footer.php'; ?>

<!-- 印一個功能(上面的img)似乎還是要加括號比較好 -->