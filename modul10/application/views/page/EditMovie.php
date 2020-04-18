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
				<font size="7" color="black"> Edit Movie </font>
				<font size="5" color="rgb(127,127,127)"> WebDB Cinemaks </font>
			</p>
		</div>
	</div>
	<div class="container" style="margin-top: 35px;">
	<?= form_open_multipart(); ?>
			<input type="text" name="id" value="<?= $movie_data['MovieID']; ?>" hidden>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" id="title" name="title" value="<?= $movie_data['Title']; ?>">
				<small class="form-text text-danger"><?= form_error('title'); ?></small>
			</div>
			<div class="form-group">
				<label for="year">Year</label>
				<input type="text" class="form-control" id="year" name="year" value="<?= $movie_data['Year']; ?>">
				<small class="form-text text-danger"><?= form_error('year'); ?></small>
			</div>
			<div class="form-group">
				<label for="director">Director</label>
				<input type="text" class="form-control" id="director" name="director" value="<?= $movie_data['Director']; ?>">
				<small class="form-text text-danger"><?= form_error('director'); ?></small>
			</div>
			<div class="form-group">
				<label for="poster" class="custom-file-label">Poster</label><br>
				<img class="img-fluid" style="width: 180px;" src="<?= base_url() .  $movie_data['PosterLink']; ?>">
				<input type="file" class="custom-file-input mt-3" id="poster" name="poster" value="<?= $movie_data['PosterLink']; ?>">
				<small class="form-text text-danger"><?= form_error('poster'); ?></small>
				<small class="form-text text-danger"><?= $error; ?></small>
			</div>
			<button class="btn btn-primary">Edit Movie</button>
			<a href="javascript: history.go(-1)" class="btn btn-danger">Cancel</a>
			<?= form_close(); ?>
	</div>
	<?php echo $footer; ?>
	<?php echo $script; ?>
</body>

</html>