<?php require '../header.php'; ?>
<?php
  $file="board.txt";
  if (file_exists($file)) {
    $board=json_decode(file_get_contents($file)); #讀取json檔案時: 先檢查檔案存在、取得字串、轉換json字串成php字串、存到board這個變數裡
  }
  $board[]=$_REQUEST['message'];
  file_put_contents($file, 'zzzzzzz');
  foreach ($board as $message) {
    echo  '<p>', $message, '</p><hr>';
  }
?>
<?php require '../footer.php'; ?>
