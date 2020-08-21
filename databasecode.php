<?php
$txt = $_POST["text"];
$dataBase = fopen("database.txt", "r") or die("Unable to recieve data!");
fwrite($dataBase, $txt);
fclose($dataBase);
?>
