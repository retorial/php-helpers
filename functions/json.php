<?php

// either get or save json data
function json($file, $data = null) {

	// if data is null
	return (is_null($data)) ? 

		// then return the data
		json_decode(file_get_contents($file), true) :

		// otherwise save the data and return the file size
		file_put_contents($file, json_encode($data));

}
