<?php

use SRC\Multiple;

include_once "vendor/autoload.php";

$objMultiple = new Multiple();
for ($i = 1; $i <= 100; $i++) {
	echo $objMultiple->getMultiple($i) . '<br>';
}