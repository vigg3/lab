<!DOCTYPE html>
<html>
<head>
	<title>Bookster | Contact Us</title>
	<meta charset="utf-8">

	<script src="base.js"></script>

	<link rel="stylesheet" type="text/css" href="contactUs.css">
	<?php 
		include("config.php");
	?>
</head>
	<body>
		<?php
			include("header.php");
		?>
		<div id="mainContent">
			<div id="margin">
				<div id="infoPadding">
					<form  action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="submit">
						Your name:<br>
						<input name="name" type="text" value="" size="30"/><br>
						Your email:<br>
						<input name="email" type="text" value="" size="30"/><br>
						Your message:<br>
						<textarea name="message" rows="7" cols="30"></textarea><br>
						<input type="submit" value="Send email"/>
					</form>
				</div>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
	</body>
</html>