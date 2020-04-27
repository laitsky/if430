<!DOCTYPE html>
<html>

<head>
	<title> Code Igniter MVC </title>
	<?php echo $style; ?>
</head>

<body>
	<?php echo $navbar; ?>
	<br />
	<br />
	<br />
	<div class="container-fluid">
		<div style="border-bottom: 1px solid black;">
			<p style="text-align: center;">
				<font size="7" color="black"> Add Movie </font>
				<font size="5" color="rgb(127,127,127)"> WebDB Cinemaks </font>
			</p>
		</div>
	</div>
	<div class="container" style="margin-top: 35px;">
		<?= form_open_multipart(); ?>
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title">
			<small class="form-text text-danger"><?= form_error('title'); ?></small>
		</div>
		<div class="form-group">
			<label for="year">Year</label>
			<input type="text" class="form-control" id="year" name="year">
			<small class="form-text text-danger"><?= form_error('year'); ?></small>
		</div>
		<div class="form-group">
			<label for="director">Director</label>
			<input type="text" class="form-control" id="director" name="director">
			<small class="form-text text-danger"><?= form_error('director'); ?></small>

		</div>
		<div class="form-group">
			<label for="poster" class="custom-file-label">Poster</label>
			<input type="file" class="custom-file-input" id="poster" name="poster">
			<small class="form-text text-danger"><?= form_error('poster'); ?></small>
			<small class="form-text text-danger"><?= $error; ?></small> 
		</div>
		<button class="btn btn-primary">Add Movie</button>
		<a href="javascript: history.go(-1)" class="btn btn-danger">Cancel</a>
		<?= form_close(); ?>
	</div>
	<?php echo $footer; ?>
	<?php echo $script; ?>
</body>

</html>