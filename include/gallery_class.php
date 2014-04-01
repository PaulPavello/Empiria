<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	class Gallery
	{
		private $images, $dirs, $folderName;
		public $GalleryName;
		public function __construct($FolderName)
		{
			$this->folderName = $FolderName;
			$arr = explode("/", $FolderName);
			$this->GalleryName = $arr[count($arr) - 1];
			$handle = opendir($FolderName);
			$direc = array();
			$imges = array();
			while (($entry = readdir($handle)) != false) {
				if($entry != "." && $entry != "..")
					if(is_dir($FolderName ."/".$entry))
						$direc[] = $entry;
					else 
						$imges[] = $entry;
			}
			sort($direc);
			sort($imges);
			foreach($imges as $img) {$this->images[] = new Image($FolderName ."/".$img);}
			foreach($direc as $dir) {$this->dirs[] = new Gallery($FolderName ."/".$dir);}
		}
		public function Show()
		{
			//echo '<h1>'.iconv("CP1250","UTF-8",$this->GalleryName).'</h1>';
			if($this->dirs != null)
				foreach($this->dirs as $dir)
				{
					echo "<div class='slide' id='#projects'>";
					echo "<h1>".$dir->GalleryName."</h1>";
					echo "<p><a href='index.php?g=".urlencode($dir->folderName)."#gallery'><img src='image/folder.png' height='150px'></a></p>";
					echo "</div>";
					//echo "<div class='gallery_item'>"; 
					//echo"<a href='index.php?id=galeria&g=".urlencode($dir->folderName)."'><img src='image/folder.png' height='150px'>"; 
					//echo"<br/><div class='caption'>".iconv("CP1250","UTF-8//TRANSLIT",$dir->GalleryName)."</a></div></div>";
				}
			if($this->images != null)
				foreach($this->images as $img)
				{
					
					$str_Image_File = $img->GetImageFile();
					$arr_str_Image_File = explode("/", $str_Image_File);
					for($j = 0; $j < count($arr_str_Image_File); $j++) 
						$arr_str_Image_File[$j] = str_replace("+", " ", urlencode($arr_str_Image_File[$j]));
					$str_Image_File = implode("/", $arr_str_Image_File);
					echo "<div class='slide' id='#projects'>";
					echo"<a href='".$str_Image_File
						."' data-lightbox='".iconv("CP1250","UTF-8",$this->GalleryName)."'>
								<img src='".$str_Image_File.
					"' ></a>";
					echo"</div>\r\n";
				}
		}
		public function ShowListFolders()
		{
			if($this->dirs != null)
				foreach($this->dirs as $dir)
				{
					echo "<li><a href='index.php?id=galeria&g=".urlencode($dir->folderName)."'>".iconv("CP1250","UTF-8//TRANSLIT",$dir->GalleryName)."</a></li>";
				}
		}
	}
	class Image
	{
		private $image_file;
		public function GetImageFile()
		{
			return $this->image_file;
		}
		public function __construct($dir)
		{
			$this->image_file = $dir;
		}
	}
?>