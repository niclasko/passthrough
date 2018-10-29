<?php
	try {
		$content = file_get_contents($_GET["u"]);
		if ($content === false) {
			header("HTTP/1.0 404 Not Found");
			die();
		} else {
			header("Access-Control-Allow-Origin: *");
			echo $content;
		}
	} catch (Exception $e) {
		header("HTTP/1.0 404 Not Found");
		die();
	}
?>
