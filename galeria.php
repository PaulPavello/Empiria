<?php
	include_once 'include/gallery_class.php';
	if(isset($_GET['g']))
	{
		$gallery_addr = $_GET['g'];
	}
	else
	{
		$gallery_addr = "Galeria";
	}
	$Gal = new Gallery($gallery_addr);
	$Gal->Show();
?>