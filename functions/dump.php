<?php

// echo the contents of a var (usually an array) on screen
function dump($var, $exit = true) {

	// echo the var
	echo '<pre>'.print_r($var,1).'</pre>';

	// if exiting after echo
	if ($exit) exit();

}
