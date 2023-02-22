<?
if (!empty($_GET["upload"])) {
	$uploaddir ="images/";
		
	$uploadfile = $_FILES['userfile']['name'];
	
}

?>

<form enctype="multipart/form-data" action="#" method="post"> <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	Select image: <input name="userfile" type="file"/>
	<input type="submit" value="Upload" />
</form>
