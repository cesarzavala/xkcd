<?php

	/*
	Extract parameters from form or establish default values for parameters
	*/
	$separator = (isset($_POST['separator']) ? trim($_POST['separator']) : "-");
	$words = (isset($_POST['words']) ? trim($_POST['words']) : 3);
	$transformation = (isset($_POST['transformation']) ? trim($_POST['transformation']) : "lowercase");
	
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
	function xkcd_password($numberOfWords=4, $separator="-", $transformation="") {
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


	function transformation_checked($which, $transformation) {
		if ( ($which==$transformation) or ($which="lowercase" and $transformation=="")){
			return "checked";
		}
	}

?>