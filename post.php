<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "入力したお名前は".$name."ですね";
?>