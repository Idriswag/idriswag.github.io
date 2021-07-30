<?php

// if (is_local_server()) {

// 	require_once $_SERVER["DOCUMENT_ROOT"]."/doulimmo/vendor/autoload.php";
	
// }

// else {

// 	require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";	    
// }


function is_local_server()
{
	if (($_SERVER['HTTP_HOST'] === '127.0.0.1') OR ($_SERVER['HTTP_HOST'] === 'localhost')) {
		return true;
	}

	return false;
}

