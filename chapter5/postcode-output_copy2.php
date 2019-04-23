<?php require '../header.php'; ?>
<?php
if (preg_match('/^[0-9]{7}$/', $_REQUEST['postcode'])) {
	echo '輸入值符合郵遞區號的格式。';
} else {
	echo '不符合郵遞區號的格式。';
}
?>
<?php require '../footer.php'; ?>
