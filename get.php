<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
echo "入力したお名前は".$name."ですね";
?>