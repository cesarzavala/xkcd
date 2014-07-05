<?php

	/*
	Extract parameters from form or establish default values for parameters
	*/
	$separator = (isset($_POST['separator']) ? trim($_POST['separator']) : "-");
	$numberOfWords = (isset($_POST['numberofwords']) ? trim($_POST['numberofwords']) : 3);
	$transformation = (isset($_POST['transformation']) ? trim($_POST['transformation']) : "lowercase");
	$length = (isset($_POST['length']) ? trim($_POST['length']) : 0);
	

	if ($numberOfWords=="") {
		$numberOfWords = 3;
	}

	if ($length=="") {
		$length = 0;
	}

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
	function xkcd_password($numberOfWords=4, $separator="-", $transformation="", $length=0) {
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
	    if ($length>0) {
	    	$password = substr($password, 1, $length);
	    }
	    return $password;
	}


	function transformation_checked($which, $transformation) {
		if ( ($which==$transformation) or ($which="lowercase" and $transformation=="")){
			return "checked";
		}
	}

?>