<?php

$name = $_POST["name"];
$from = $_POST["mail"];
$betreff = $_POST["betreff"];
$text = $_POST["text"];
$empfaenger ="dennis.bohro@gmail.com";
if(mail($empfaenger, $betreff, $text, $from)){
echo "1";
}
?>