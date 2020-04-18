<!DOCTYPE html>
<html>
<head>
	<title> Code Igniter MVC </title>
	<?php echo $style; ?>
</head>
<body>
	<?php echo $navbar; ?>
	<br/>
	<br/>
	<br/>
		
	<div class="container-fluid">
			<div style="border-bottom: 1px solid black;">
				<p style="text-align: center;"> 
					<font size="7" color="black"> <?= $movie_data['Title']; ?> </font>
					<font size="5" color="rgb(127,127,127)"> Movie Details </font> 
					<a href="<?php echo base_url('index.php/MoviePage'); ?>" style="float:right;margin-right: 15px;margin-top: 35px;">
						<button class="btn btn-primary"> 
							<span class="glyphicon glyphicon-menu-left"></span>
							Back
						</button>
					</a>
				</p>
			</div>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p style="font-size: 25px;color: rgb(127,127,127);"> Released : <?= $movie_data['Year']; ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Director : <?= $movie_data['Director']; ?></p>
			</div>
			<div class="col-md-6">
				<img src="<?= base_url() . $movie_data['PosterLink']; ?>" alt="Link Poster not found !" width="300" height="400">
			</div>
		</div>
	</div>
	<?php echo $footer; ?>
	<?php echo $script; ?>
</body>
</html>