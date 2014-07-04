<?php


	/* 
	Returns an array of n random words read from words.txt
	*/
	function xkcd_password($numberOfWords=4, $options=array()) {
		$contents = file_get_contents('words.txt');
		$contents = str_replace("\r", "", $contents);
		$words = explode("\n",$contents );
		$rand_keys = array_rand($words, $numberOfWords);
		foreach($rand_keys as $key => $value)
	    {
	        $result[] = $words[$value];
	    }
	    return $result;
	}

	function string_to_li($original) {
		return "<li>$original</li>";
	}

	function array_to_ul($original) {
		$li_array = array_map("string_to_li",$original);
		// print_r($li_array);
		return "<ul>".implode(" ",$li_array)."</ul>";
	}

?>