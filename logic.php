<?php

	/*
		Runs the string transformation for each element of an array
	*/
	function xkcd_transform($transformation, $original) {
		switch ($transformation) {
			case "uppercase":
				$transformed = array_map("strtoupper",$original);
				break;
			case "lowercase":
				$transformed = array_map("strtolower",$original);
				break;	
			case "firstupper":
				$transformed = array_map("ucfirst",$original);
				break;
			default:
				$transformed = $original;
		}
		return $transformed;
	}
	

	/* 
	Returns an array of n random words read from words.txt
	*/
	function xkcd_password($numberOfWords=4, $separator=" ", $transformation="") {
		$contents = file_get_contents('words.txt');
		$contents = str_replace("\r", "", $contents);
		$words = explode("\n",$contents );
		$rand_keys = array_rand($words, $numberOfWords);
		foreach($rand_keys as $key => $value)
	    {
	        $result[] = $words[$value];
	    }
	    $password = xkcd_transform($transformation,$result);
	    $password = implode($separator,$password);
	    return $password;
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