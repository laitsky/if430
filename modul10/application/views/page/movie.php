<!DOCTYPE html>
<html>
<head>
	<title> Code Igniter MVC </title>
	<?php echo $style; ?>
</head>
<body>
	<div class="container">
	<?php echo $navbar; ?>
	<br/>
	<br>
	<br>
	<a href="<?php echo base_url("index.php/MoviePage/AddMovie"); ?>"." style="float:right;margin-right: 15px;">
		<button class="btn btn-primary"> 
			<span class="glyphicon glyphicon-plus"></span>
			Movie
		</button>
	</a>
	<br/>
	<br/>
	<br/>
	<?php echo $table; ?>

	<?php echo $footer; ?>
	<?php echo $script; ?>
	</div>
</body>
</html>