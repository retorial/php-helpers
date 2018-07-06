<?php

// return a given directory's file listing as an array
function files($dir, $include_hidden_files = false) {

	// get the files
	$files = scandir($dir);

	// whether to include hidden (.) system files
	if (!$include_hidden_files) {
		$files = preg_grep('/^([^.])/', $files);
	}

	// return the files
	return array_values($files);

}
