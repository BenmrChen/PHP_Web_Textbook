<?php require '../header.php'; ?>
<p>請輸入姓名: </p>
<form action="user-output 拷貝.php" method="post">
<input type="text" name="user">
<input type="submit" value="確定">
</form>
<!-- 以上全部都是Html的語法 -->
<?php require '../footer.php'; ?>
<!-- 
require先是import header和footer, 這麼做是因為header和footer會一直重複被使用到所以就分別獨立出一個檔案來 在其他檔案若有用到就去call他 使用require這個方式

中間的就是html語法
基本上都是標籤tags

<?php  ?>
<form action="user-output 拷貝.php" method="post">
form代表偷入表單 action代表輸入後要執行的程式 method代表要傳接資料的方法
<input type="text" name="user">
input type有很多種 這邊是text和submit 另外還有button/checkbox/color等等...
name這個參數(attribute)在書中被稱為REQUEST參數名，本例中被設為user
在user-output 拷貝裡的$_REQUEST['user']
就是根據name參數被設為user(RUQUEST參數名為user)的條件去找REQUEST參數 並將其值存在$_REQUEST裡

最後再用echo把$_REQUEST這個參數給印出來就完成了!

在html裡 有$_XXX(大寫英文)的就是預設的參數 -->