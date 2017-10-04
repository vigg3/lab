<head>
	<title>Bookster | Home</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="index.css">
	<?php 
		include("config.php")
	?>
</head>
<body>
	<?php 
		include("header.php"); 
	?>
	<div id="mainContent">
		<ul id="noMargin">
			<li>
				<div class="content-wrapper">
					<section class="alignC">
						<a href="aboutUs.php" class="hvr-float-shadow">About us</a>
						<p class="antiAliased">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</section>
				</div>
			</li>
			<li>
				<div class="content-wrapper">
					<section class="alignC">
						<a href="browseBooks.php" class="hvr-float-shadow">Browse Books</a>
						<p class="antiAliased">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</section>
				</div>			
			</li>
			<li>
				<div class="content-wrapper">
					<section class="alignC">
						<a href="myBooks.php" class="hvr-float-shadow">My Books</a>
						<p class="antiAliased">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</section>
				</div>			
			</li>
			<li>
				<div class="content-wrapper">
					<section class="alignC">
						<a href="contactUs.php" class="hvr-float-shadow">Contact Us</a>
						<p class="antiAliased">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</section>
				</div>			
			</li>
		</ul>
	</div>
	<?php
		include ('footer.php');
	?>
</body>