<?php 	
	if($_FILES["file"]["error"]>0){
		echo "Error".$FILES["file"]["error"]."<br/>";
	}else{
	echo "Upload:".$_FILES["file"]["name"]."<br>";
	echo "Type:".$_FILES["file"]["type"]."<br>";
	echo "Size:".$_FILES["file"]["size"]."<br>";
	echo "Temporary path:".$_FILES["file"]["tmp_name"]."<br>";
	var_dump(file_exists($_FILES["file"]["name"]));
	move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
	}
 ?>