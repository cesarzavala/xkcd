<?php
	function xkcd_password($numberOfWords=4, $options=array()) {
		$contents = file_get_contents('words.txt');
		$contents = str_replace("\r", "", $contents);
		$words = explode("\n",$contents );
		return $words[1250];
	}

?>