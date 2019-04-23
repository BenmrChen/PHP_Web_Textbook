<?php require '../header.php'; ?>
<?php
//echo "您選擇的提示為$_REQUEST[question]";
//echo "您輸入的答案為$_REQUEST[answer]";
//
//echo "<p>您選擇的提示為「$_REQUEST[question]」</p>";
//echo "<p>您輸入的答案為「$_REQUEST[answer]」</p>";

//echo '您輸入的提示為'.$_REQUEST['question'];
//echo '您輸入的答案為'.$_REQUEST['answer'];

echo '您輸入的提示為「'.$_REQUEST['question'].'」'."\n";
// 這個換行功能能在PHP、終端機執行，所以如果要用網頁瀏覽的話就還是得用<\p>或<br>; 另外\n因為是個功能，也得用雙引號把它括起來
echo '您輸入的答案為「'.$_REQUEST['answer'].'」';

?>

<?php require '../footer.php'; ?>
