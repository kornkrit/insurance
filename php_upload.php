<?php
function upimg($img,$imglocate){
			global $file_up;
			if($img['name']!=''){
			$fileupload1=$img['tmp_name'];
			$g_img=explode(".",$img['name']);
			$file_up=time().".".$g_img[1];
				if($fileupload1){
					$array_last=explode(".",$file_up);
					$c=count($array_last)-1;
					$lastname=strtolower($array_last[$c]);
					if($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg" or $lastname=="swf"){					
						@copy($fileupload1,$imglocate.$file_up);			
					}	
				}				
			}
}
if($_FILES['file']['name']!=""){
	upimg($_FILES['file'],"temp/");
	echo "<script language=\"javascript\">";
	echo "var pl=top.document.getElementById('mypic1');";
	echo "pl.innerHTML=\"<img src='temp/".$file_up."' width='50' height='50' />\";";
	echo "top.document.form1.action='';";
	echo "top.document.form1.target='';";
	echo "</script>";
	echo "<meta http-equiv=\"Refresh\" content=\"0;URL=php_upload.php?d_img=".$file_up."\" />";
}
?>
<?php
	if($_GET['d_img']!=""){
		@unlink("temp/".$_GET['d_img']);
	}
?>
