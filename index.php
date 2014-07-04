<?php 
	
	error_reporting(-1);
	ini_set('display_errors', 1);

	require('logic.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>xkcd password generator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>xkcd password generator</h1>
	<div class="passwordSection">

		<?php echo array_to_ul(array('Cesar','Zavala','Mesta')); ?>
	</div>
	<h2>Test below</h2>
</body>
</html>