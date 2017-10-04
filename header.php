<?php
@ $db = new mysqli('localhost', 'root', 'vigge', 'lab');

if ($db->connect_error) 
{
	echo "could not connect: " . $db->connect_error;
	printf("<br><a href=index.php>Return to home page </a>");
	exit();
}

if (isset($_POST['username'], $_POST['password'])) {
	$uname = mysqli_real_escape_string($db, $_POST['username']);
	$upass = sha1($_POST['password']);
	$query = ("SELECT * FROM user WHERE username = '{$uname}' "."AND password = '{$upass}'");

	$stmt = $db->prepare($query);
	$stmt->execute();
	$stmt->store_result(); 

	$totalcount = $stmt->num_rows();
}

if (isset($_FILES['upload'])){
	
	$allowedextensions = array('jpg', 'jpeg', 'gif', 'png');
	
	$extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
	
	echo "Your file extension is: ".$extension;
	
	$error = array ();

	if(in_array($extension, $allowedextensions) === false){
		$error[] = 'This is not an image, upload is allowed only for images.';        
	}

	if($_FILES['upload']['size'] > 1000000){
		
		$error[]='The file exceeded the upload limit';
	}
	
	if(empty($error)){
		
		move_uploaded_file($_FILES['upload']['tmp_name'], "uploadedfiles/{$_FILES['upload']['name']}");     
	}
	
}
?>

<header>
	<div id="pageAlign">
		<div id="loginAlign">
			<div id="loginBackground">
				<div id="loginContent">
					<form id="dontReload" action="" method="POST">
						<input type="text" name="username">
						<input type="password" name="password">
						<input type="submit">
					</form>
					<?php
					if (isset($totalcount))
					{
						if ($totalcount == 0) 
						{
							echo '<h2>You got it wrong. Can\'t break in here!</h2>';
						} 
						else 
						{
							if (isset($error))
							{
								if (empty($error))
								{
									
									echo '<a href="uploadedfiles/' . $_FILES['upload']['name'] . '">Check file';  
								}
								else
								{
									foreach ($error as $err)
									{
										echo $err;
									}
								}
							}
							echo '<div>';
							echo '<form action="" method="POST" enctype="multipart/form-data">';
							echo '<input type="file" name="upload" /></br>';
							echo '<input  type="submit" value="submit" />';
							echo '</form>';
							echo '</div>';
						}
					}
					?>
					<button onclick="closePopup()" id="close">&times;</button>
				</div>
			</div>
		</div>
	</div>
	<div id="headerBlock">
		<div id="marginTop">
			<div id="topHeader">
				<div id="logo" onclick="reDirIndex()">
					<img id="icon" src="pics/icon.png">
					<p>Bookster</p>
				</div>
				<div id="widgets">
					<img id="email" src="pics/mailIcon.png">
					<div onclick="reDirBB()" id="searchBtn">
						<p>LOGIN</p>
					</div>
				</div>
				<img id="hamburger" src="pics/hamburger.png">
			</div>
		</div>
		<div id="navigation" class="closed">
			<nav id="navUl" class="alignC">
				<ul class="antiAliased">
					<li class="hover-underline">
						<a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" href="index.php">Home</a>
					</li>
					<li class="hover-underline">
						<a class="<?php echo $current_page == 'aboutUs.php' ? 'active' : NULL ?>" href="aboutUs.php">About us</a>
					</li>
					<li class="hover-underline">
						<a class="<?php echo $current_page == 'browseBooks.php' ? 'active' : NULL ?>" href="browseBooks.php">Browse books</a>
					</li>
					<li class="hover-underline">
						<a class="<?php echo $current_page == 'myBooks.php' ? 'active' : NULL ?>" href="myBooks.php">My Books</a>
					</li>
					<li class="hover-underline">
						<a class="<?php echo $current_page == 'gallery.php' ? 'active' : NULL ?>" href="gallery.php">Gallery</a>
					</li>
					<li class="hover-underline">
						<a class="<?php echo $current_page == 'booksearch.php' ? 'active' : NULL ?>" href="contactUs.php">Contact us</a>
					</li>
				</ul>
			</nav>
		</div>
		<link rel="stylesheet" type="text/css" href="base.css">
		<script src="base.js"></script>
	</div>
</header>


