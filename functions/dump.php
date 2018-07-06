<?php

// echo the contents of a var on screen
function dump($var, $exit = true) {

	// echo the var
	echo '<pre>'.var_export($var, true).'</pre>';

	// if exiting after echo
	if ($exit) exit();

}
