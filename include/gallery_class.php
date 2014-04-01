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
			if($this->dirs != null)
				foreach($this->dirs as $dir)
				{
					echo "<div class='slide' id='#projects'>";
					echo "<h1>".$dir->GalleryName."</h1>";
					echo "<a href='index.php?g=".urlencode($dir->folderName)."#gallery'>";
					echo "<img src='".$dir->RandImage()."' height='450px' style=''></a>";
					echo "</div>";
				}
			if($this->images != null)
				foreach($this->images as $img)
				{
					echo "<div class='slide' id='#projects'>";
					echo"<a href='".$img->GetImageFile()."' data-lightbox='".iconv("CP1250","UTF-8",$this->GalleryName)."'>
								<img src='".$img->GetImageFile()."' ></a>";
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
		public function RandImage()
		{
			if(count($this->images) > 0)
			{
				return $this->images[rand(0,count($this->images)-1)]->GetImageFile();
			}
			else
			{
				return $this->dirs[rand(0,count($this->dirs)-1)]->RandImage();
			}
		}
	}
	class Image
	{
		private $image_file;
		public function GetImageFile()
		{
			$str_Image_File = $this->image_file;
			$arr_str_Image_File = explode("/", $str_Image_File);
			for($j = 0; $j < count($arr_str_Image_File); $j++)
				$arr_str_Image_File[$j] = str_replace("+", " ", urlencode($arr_str_Image_File[$j]));
				$str_Image_File = implode("/", $arr_str_Image_File);
			return $str_Image_File;
		}
		public function __construct($dir)
		{
			$this->image_file = $dir;
		}
	}
?>