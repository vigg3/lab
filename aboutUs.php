<!DOCTYPE html>
<html>
<head>
	<title>Bookster | About Us</title>
	<meta charset="utf-8">

	<script src="base.js"></script>

	<link rel="stylesheet" type="text/css" href="aboutUs.css">
	<?php 
		include("config.php")
	?>
</head>
	<body>
		<?php 
			include("header.php");
		?>
		<div id="mainContent">
			<div id="aboutUsC">
				<div id="aboutUs-posAbs">
					<img src="pics/library.jpg">
					<div id="aboutUs-textBack">
						<div id="aboutUsW">
							<h4>The epic journey of Bookster</h4 class="antiAliased">
							<p class="antiAliased">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include("footer.php");
		?>
	</body>
</html>
