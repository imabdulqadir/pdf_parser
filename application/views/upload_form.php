<html>
<head>
	<title>Inolyst Contest</title>
	<link rel="stylesheet" href="<?php echo(CSS.'design.css'); ?>">

</head>
<body >
	<div class="header">
		<span class="cfj">code for job</span>
		<a class="link" href="<?php echo base_url();?>index.php/upload/searchold"> SEARCH</a>
	</div>
	<div class="container">
		<div class="plc1">
		</div>
		<div class="plc2u">
			<?php echo "<b>".$error."</b>";?>
			
				<?php echo form_open_multipart('upload/do_upload');?>

				<h1>Upload pdf to extract data.</h1>
				<span class="file">
				<input class="fubtn" type="file" name="userfile" size="20" />
			</span>
				<br /><br />

				<input class="buttn" type="submit" value="upload" />
		</div>
			<div class="plc3">
			</div>
	</div>
	<div class="footer">
		<?php echo "By Abdul Qadir & Nisar Ali Khan<br>&#9400;COPYRIGHTS 2014" ?>
	</div>

	</body>
	</html>
