<?php
if (isset($_POST['generate'])) {
	$code = $_POST['barcode'];
	echo "<center><img alt='testing' src='barcode.php?codetype=Code128&size=50&text=" . $code . "&print=false'/></center>";
}
