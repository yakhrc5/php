<?php
function greet($name) {
    echo $name . 'さん、こんにちは';
}

greet('ay');
require_once("../php03/config/status_codes.php");
$random_numbers = array_rand($status_codes, 5);

echo '<pre>';
var_dump($random_numbers);
exit;
