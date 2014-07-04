<!DOCTYPE html>
<html lang="en">
<head>
	<title>xkcd password generator</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Test</h1>
	<div>

<?php 

	$contents = file_get_contents('words.txt');
	$contents = str_replace("\r", "", $contents);
	$words = explode("\n",$contents );
	
	print_r($words);
?>
	</div>
	<h2>Test below</h2>
	<?php echo $words[1250]; ?>
</body>
</html>