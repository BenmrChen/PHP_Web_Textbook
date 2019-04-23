<?php require '../header.php'; ?>
<p>請選擇密碼提示問題：</p>
<form action="select-foreach-output_copy.php" method="post">
<select name="question">
    <?php
        $question=[
        '最喜歡的水果',
        '最愛的電影',
        '最萌的動物' ,
        '最衰的日子'
        ];
        Foreach($question as $item){
            echo "<option value=$item>$item</option>";
        }
    ?>
</select>
<p>密碼提示問題的答案</p>
<p><input type="text" name="answer"</p>
<p><input type="submit" value="確認"</p>
</form>
<?php
?>
<?php require '../footer.php'; ?>
