<!DOCTYPE html>
<head>
<title>Homework 2</title>
</head>

<?php
$array = range(20, 1000, 37);

function is_prime($number) {
	$counter = 0;
	for ($i = 1; $i < $number / 2; $i++) {
		if ($number % $i == 0) {
			$counter++;
		}
	}
	if ($counter == 1) return TRUE;
	else return FALSE;
}
			
function find_3_prime($argument = NULL) {
	if ($argument == NULL) {
		$arr = $GLOBALS['array'];
	}
	else $arr = $argument;
	$counter = 0;
	foreach ($arr as &$value) {
		if (is_prime($value) == TRUE) {
			$counter++;
		}
		if ($counter == 3) {
			echo "$value<br />";
			break;
		}
	}
}

function check_exists($num) {
	if (in_array($num, $GLOBALS['array'])) {
		echo "The number $num exists in the array<br />";
	}
	else echo "The number $num does not exist in the array<br />";
}
find_3_prime();
check_exists(146);
check_exists(284);
check_exists(871);
?>