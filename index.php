<?php
	header("Access-Control-Allow-Origin: *");
	try {
		$content = file_get_contents($_GET["u"]);
		if ($content === false) {
			header("HTTP/1.0 404 Not Found");
			die();
		} else {
			echo $content;
		}
	} catch (Exception $e) {
		header("HTTP/1.0 404 Not Found");
		die();
	}
?>
