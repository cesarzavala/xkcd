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
	<!-- Bootstrap additions -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>		
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End of Bootstrap additions -->

	<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body class="container">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
		<h1>xkcd password generator</h1>
  </div>
</nav>
<header class="jumbotron">
	<h2 class="subtitle">Generate a random password <a href="http://xkcd.com/936/">xkcd</a> style from a list of 235,886 words</h2>
	<div class="password"><?php echo xkcd_password($words,$separator,$transformation); ?></div>
</header>
<form action="index.php" method="POST" role="form" class="form-horizontal">
	<div class="form-group">
		<label for="separator" class="col-sm-3 control-label">Separator</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="separator" name="separator" 
				placeholder="<?php echo $separator; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="words" class="col-sm-3 control-label">Number of Words</label>
		<div class="col-sm-3">
			<input type="number" class="form-control" id="words" name="words" 
				placeholder="<?php echo $words; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="transformation" class="col-sm-3 control-label">Transformation</label>
		<div class="col-sm-9">
			<label><input type="radio" name="transformation" value="uppercase" <?php echo transformation_checked("uppercase",$transformation) ?> >Upper Case</label>
			<label><input type="radio" name="transformation" value="firstupper" <?php echo transformation_checked("firstupper",$transformation) ?> >First letter upper case</label>
			<label><input type="radio" name="transformation" value="lowercase" <?php echo transformation_checked("lowercase",$transformation) ?> >Lower Case</label>
		</div>
	</div>
	<button type="button" class="col-sm-offset-3 btn btn-default">Generate password</button>
</form>
</body>
</html>