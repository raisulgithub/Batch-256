<?php
function greet($n)
{
	if ($n <= 0) {
	}
	else{
		echo "Hello <br>";
		$n--;
		greet($n);
	}
}
greet(100);
?>