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
		<?php echo xkcd_password($words,$separator,$transformation); ?>
	</div>
	<form action="index.php" method="POST">
		Separator: <input type='text' name='separator' value="<?php echo $separator; ?>"><br>
		Number of Words: <input type='text' name='words' value="<?php echo $words; ?>"><br>
		Transformation: 
			<input type="radio" name="transformation" value="uppercase" <?php echo transformation_checked("uppercase",$transformation) ?> >Upper Case 
			<input type="radio" name="transformation" value="lowercase" <?php echo transformation_checked("lowercase",$transformation) ?> >Lower Case 
			<input type="radio" name="transformation" value="firstupper" <?php echo transformation_checked("firstupper",$transformation) ?> >First letter upper case<br>
		<input type='submit'>
	</form>
</body>
</html>