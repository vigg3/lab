<?php
	include("config.php");
	$title = "Gallery";
	include("header.php");
	include("gallery.css");
?>
<div id="mainContent">
	<?php
	$folder_path = 'uploadedfiles/'; //image's folder path

	$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

	$folder = opendir($folder_path);

	if($num_files > 0)
	{
		while(false !== ($file = readdir($folder))) 
		{
			$file_path = $folder_path.$file;
			$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
			if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
			{
	?>
	<a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="100" /></a>
	<?php
			}
		}
	}
	else
	{
		echo "the folder was empty !";
	}
	closedir($folder);
	?>
</div>
<?php
	include("footer.php");
?>