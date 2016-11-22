<?php session_start(); ?>
<?
$file = $_FILES['fileupload']['name'];
$typefile = $_FILES['fileupload']['type']; 
$sizefile = $_FILES['fileupload']['size']; 
$pathsave= $_SERVER["DOCUMENT_ROOT"]."/insurance/copy_register/";
$Nfilename = "copy_register/".$file;
//copy($_FILES['fileupload']['tmp_name'],$pathsave.$_FILES['fileupload']['name']);
copy($_FILES['fileupload']['tmp_name'],$pathsave.$_FILES['fileupload']['name']);

$_SESSION['img'] = $Nfilename;

?>

<script language="JavaScript">
<!--
window.parent.UploadFinish('<?=$Nfilename?>');
//-->
</script>