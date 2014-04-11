<html>
<head>
	<title>Inolyst Contest</title>
	<link rel="stylesheet" href="<?php echo(CSS.'design.css'); ?>">
</head>
<body>
	
	<?php echo form_open('upload/search'); ?>
	<div class="header">
		<span class="cfj">code for job</span>
		<a class="link" href="<?php echo base_url();?>index.php/upload/".>UPLOAD</a>
	</div>
	<div class="container">
	<div class="plc1">
	</div>

	<div class="plc2">
		
	<div class="srch">
	<input class="srchbox" type="text" name="srch" placeholder="Enter Registration No"><input class="buttn" type="submit" value="search" ><br>
	<?php echo form_close(); ?>
	</div>
	<?php 
		if(isset($upload_data))
		{
			echo "<div class='data'> ";
	echo "FILE UPLOADED SUCCESSFULLY.";
	echo "</div>";
}
	?>
	<?php
	if(isset($regno))
	{
		echo "<div class='data'> ";
		$cmplogoshow=preg_replace('/\s+/', '', $cmplogo);
		if(substr($cmplogoshow,-4)==".jpg")
		{	
			echo "<img src=".URL."uploads/images/".$cmplogoshow." width=100 height=100><br>";
		}
		else
		{
			echo $cmplogo."<br>";
		}

		echo "<span class='det'>REGISTRATION NO: ".$regno."<br>";
		echo "CLASS: ".$classno."<br>";
		echo "COMPANY NAME: ".$cmpname."<br>";
		echo "COMPANY ADDRESS: ".$cmpadd."<br>";
		echo "</span></div>";

	}
	if(isset($noentry))
	{
		
		echo "<div class='data'> ";
		echo $noentry."<br>";
		echo "</div>";
	
	
}
	
	?>
	
	<!---->
</div>
<div class="plc3">
</div>
</div>
<div class="footer">
	<?php echo "By Abdul Qadir & Nisar Ali Khan<br>&#9400;COPYRIGHTS 2014" ?>
</div>
</body>
</html>
